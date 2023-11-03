<?php

namespace App\Http\Controllers;
use App\Models\Auditorium;
use App\Models\Event;
use App\Models\User;
use App\Models\Facility;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function storebook(Request $request)
    {
        $request->validate([
            'nameEvent' => 'required',
            'auditorium' => 'required',
            'booking_date'=>'required',
            'Extra-date' => 'in:yes,no',
            'catering' => 'in:Yes,No',
            'ac' => 'in:AC,NON AC',
        ]);
        $audi=Auditorium::find($request->input('auditorium'));
        $times = $request->input('booking_time');
        $user = auth()->user();
        $event = new Event([
            'auditorium'=> $request->input('auditorium'),
            'user'=> $user->id,
            'cost'=>$audi->cost,
            'nameEvent'=> $request->input('nameEvent'),
            'detail_event'=> $request->input('detail_event'),
            'booking_date'=> $request->input('booking_date'),
            'extra_date'=> $request->input('extra_date'),
            'days'=> $request->input('days'),
            'booking_time'=> implode(',', $times),
            'catering'=> $request->input('catering'),
            'ac'=> $request->input('ac'),
            'needs'=> $request->input('needs'),
            'approval_status'=> $request->input('approval_status'),
            'payment_status'=> $request->input('payment_status'),
            'payment'=> $request->input('payment'),
        ]);
    
        $event->save();
        if ($user->role == 'Admin') {
            return redirect()->route('superadmin')->with('success', 'event added!');
        } elseif ($user->role == 'customer') {
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
        return redirect()->route('viewbookcus',['userId' => $event->user]);       
    }
    public function disAppStatus($eventId)
    {
        $event = Event::find($eventId);
        DB::table('events')
        ->where('id', $eventId)
        ->update(['approval_status' => 'disapproved']);
        return redirect()->route('viewbook',['auditoriumId' => $event->auditorium]);
    }
    public function AppStatus($eventId)
    {
        $event = Event::find($eventId);
        DB::table('events')
        ->where('id', $eventId)
        ->update(['approval_status' => 'approved']);
        return redirect()->route('viewbook',['auditoriumId' => $event->auditorium]);
    }
}
