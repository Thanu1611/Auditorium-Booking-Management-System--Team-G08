<?php

namespace App\Http\Controllers;
use App\Models\Auditorium;
use App\Models\Event;
use App\Models\User;
use App\Models\Facility;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class EventController extends Controller
{
    public function storebook(Request $request)
    {
        $request->validate([
            'nameEvent' => 'required',
            'auditorium' => 'required',
            'booking_date'=>'required',
            'start_time' =>'required',
            'end_time' =>'required',
        ]);
        $audi=Auditorium::find($request->input('auditorium'));
        $times = $request->input('booking_time');
        $user = auth()->user();
        $event = new Event([
            'auditorium'=> $request->input('auditorium'),
            'user'=> $user->id,
            'cost'=>$request->input('cost'),
            'nameEvent'=> $request->input('nameEvent'),
            'detail_event'=> $request->input('detail_event'),
            'booking_date'=> $request->input('booking_date'),
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
            'approval_status'=> $request->input('approval_status'),
            'payment_status'=> $request->input('payment_status'),
            'payment'=> $request->input('payment'),
        ]);
    
        $event->save();
        if ($user->role == 'Admin') {
            return redirect()->route('superadmin')->with('success', 'event added!');
        } elseif ($user->role == 'customer') {
            $data['email'] = $user->email;

            $data['title'] = 'Welcome to auditorium';
    
            $data['body'] = "Hello,

            🌟 Welcome to the Auditorium Magic! 🌟 We're thrilled to have you as a part of our vibrant community.
            
            Your booking is currently awaiting the approval of our expert admin team. Be prepared for a grand confirmation coming your way soon! 🎉
            
            If you didn't request this booking or if you have any questions, our dedicated support team is here to wave their magic wand and assist you. 🪄✨
            
            Stay enchanted,
            
            The Auditorium Enchantment Team 🎭✨";
            $auditorium = Auditorium::find($request->input('auditorium'));
            $admin = User::find($auditorium->admin);
            
            Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });
            

            $data['email'] = $admin->email;

            $data['title'] = 'Welcome to auditorium';
    
            $data['body'] = "Alert,

            🌟 New booking is arrived! 🌟 
            🎭✨";
            $auditorium = Auditorium::find($request->input('auditorium'));
            $admin = User::find($auditorium->admin);
            
            
            Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
                $message->to($data['email'])->subject($data['title']);
            });

            $userId=$user->id;
            return redirect()->route('viewbookcus',['userId' => $userId])->with('success', 'Booking requested!');
        }
    }
    public function storefaci(Request $request)
    {
        $request->validate([
            'nameFacility' => 'required',
            'auditorium' => 'required',
            'cost' => 'required',
        ]);
        $auditoriumId = $request->input('auditorium');
        $faci = new Facility([
            'auditorium'=>$auditoriumId,
            'nameFacility'=> $request->input('nameFacility'),
            'cost'=> $request->input('cost'),
            'detail_Facility'=> $request->input('detail_Facility'),
        ]);
    
        $faci->save();
            return redirect()->route('table',['auditoriumId'=>$faci->auditorium])->with('success', 'facility added!');
     
    }
    public function editfaci($name,$auditorium)
    {
        $faci=Facility::where('auditorium',$auditorium)
        ->where('nameFacility',$name)
        ->first();
        $auditorium=Auditorium::find($auditorium);
        return view('editFaci',compact('auditorium','faci'));
    }
    public function updatefaci(Request $request,$name,$auditorium)
    {
        $faci=Facility::where('auditorium',$auditorium)
        ->where('nameFacility',$name)
        ->first();
        $request->validate([
            'nameFacility' => 'required',
            'auditorium' => 'required',
            'cost' => 'required',
        ]);
        DB::table('facilities')
            ->where('nameFacility', $name)
            ->where('auditorium', $auditorium)
            ->update([
                'nameFacility' => $request->get('nameFacility'),
                'auditorium' => $request->get('auditorium'),
                'cost' => $request->get('cost'),
                'detail_facility' => $request->get('detail_facility'),
            ]);
     return redirect()->route('table',['auditoriumId'=>$faci->auditorium])->with('success', 'facility updated!');
      //  $auditorium=Auditorium::find($auditorium);
      //  return view('editFaci',compact('auditorium','faci'));
    }
    public function changeAppStatus($eventId)
    {
        $event = Event::find($eventId);
        DB::table('events')
        ->where('id', $eventId)
        ->update(['approval_status' => 'cancel']);

        $user=User::find($event->user);

        $data['email'] = $user->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Hello,

        You cancel your booking.

        If you didn't cancel this booking or if you have any questions, our dedicated support team is here to wave their magic wand and assist you. 🪄✨
        
        Stay enchanted,
        
        The Auditorium Enchantment Team 🎭✨";
        $auditorium = Auditorium::find($event->auditorium);
        $admin = User::find($auditorium->admin);
        
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        

        $data['email'] = $admin->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Alert,

        🌟 A booking is canceled by the customer! 🌟 
        🎭✨";
        $auditorium = Auditorium::find($event->auditorium);
        $admin = User::find($auditorium->admin);
        
        
        
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });



        return redirect()->route('viewbookcus',['userId' => $event->user]);       
    }
    public function disAppStatus($eventId)
    {
        $event = Event::find($eventId);
        DB::table('events')
        ->where('id', $eventId)
        ->update(['approval_status' => 'disapproved']);
        $user=User::find($event->user);

        $data['email'] = $user->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Hello,

        We can't accept your booking.

        sorry for that,

        If you have any questions, our dedicated support team is here to wave their magic wand and assist you. 🪄✨
        
        Stay enchanted,
        
        The Auditorium Enchantment Team 🎭✨";
        $auditorium = Auditorium::find($event->auditorium);
        $admin = User::find($auditorium->admin);
        
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        
        return redirect()->route('viewbook',['auditoriumId' => $event->auditorium]);
    }
    public function AppStatus($eventId)
    {
        $event = Event::find($eventId);
        DB::table('events')
        ->where('id', $eventId)
        ->update(['approval_status' => 'approved']);

        $user=User::find($event->user);

        $data['email'] = $user->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Hello,

        We accepted your booking.

        please pay booking amount to the bank. Bank details and invoice are provided below.

        If you have any questions, our dedicated support team is here to wave their magic wand and assist you. 🪄✨
        
        Stay enchanted,
        
        The Auditorium Enchantment Team 🎭✨";
        $auditorium = Auditorium::find($event->auditorium);
        $admin = User::find($auditorium->admin);
        
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        return redirect()->route('viewbook',['auditoriumId' => $event->auditorium]);
    }
    public function pay($eventId)
    {
        $event = Event::find($eventId);
        $user = User::find($event->user);
        return view('paymentform',compact('event','user'));
    }
    public function updatepay(Request $request, $eventId)
    {
        $event = Event::find($eventId);
        $user = User::find($event->user);
    
        $validator = Validator::make($request->all(), [
            'nameEvent' => 'required',
            'cost' => 'required',
            'payment' => ['required', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $imagePath = null;
        if ($request->hasFile('payment')) {
            $image = $request->file('payment');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $image->move(public_path('payment'), $filename);
            $imagePath = 'payment/' . $filename;
        }
        $auditorium = Auditorium::find($event->auditorium);
        $admin = User::find($auditorium->admin);

        $data['email'] = $admin->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Alert,

        🌟 A customer made the payment , please check and confirm them! 🌟 
        🎭✨";

        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
    
        $event->update(['payment' => $imagePath, 'payment_status' => 'paid']);
        return redirect()->route('viewbookcus', ['userId' => $user->id]);
    }
    public function checkpay($eventId)
    {
        $event = Event::find($eventId);
        $auditorium = Auditorium::find($event->auditorium);
        $user = User::find($event->user);
        return view('checkpay',compact('event','auditorium','user'));
    }
    public function confirmpay(Request $request, $eventId)
    {
        $event = Event::find($eventId);
        $user = User::find($event->user);
        $auditorium=Auditorium::find($event->auditorium);        
        $event->update([ 'payment_status' => 'done']);

        $data['email'] = $user->email;

        $data['title'] = 'Welcome to auditorium';

        $data['body'] = "Hello,

        We accepted your booking payment.
        
        If you have any questions, our dedicated support team is here to wave their magic wand and assist you. 🪄✨
        
        Stay enchanted,
        
        The Auditorium Enchantment Team 🎭✨";
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
        });
        
        return redirect()->route('viewbook', ['auditoriumId' => $auditorium->id]);
    }

    public function detail($eventId)
    {
        $event = Event::find($eventId);
        $auditorium = Auditorium::find($event->auditorium);
        $user = User::find($event->user);
        return view('viewbooking',compact('event','auditorium','user'));
    }
}
