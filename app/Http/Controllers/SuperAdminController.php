<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auditorium;
use App\Models\User;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Carbon;

class SuperAdminController extends Controller
{
    public function addaudi()
    {
        $admins=DB::table('users')
        ->where('role', 'admin')
        ->whereNotExists(function ($query) {
            $query->select(DB::raw(1))
                ->from('auditoria')
                ->whereColumn('users.id', 'auditoria.admin');
        })
        ->get();
        return view("Super_Admin.add_audi",compact('admins'));
    }
    public function superadmina()
    {
        $auditorium = Auditorium::all();
        return view("Super_Admin.add_auditorium",compact('auditorium'));
    }
    public function storeaudi(Request $request)
    {
        $request->validate([
            'nameAudi' => 'required',
            'capacity' => 'nullable',
            'description' => 'nullable',
            'cost'=>'required',
            'images.*' => ['required', 'mimes:jpeg,png,jpg,gif|max:2048'],
        ]);
    
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('YmdHi') . $image->getClientOriginalName();
                $image->move(public_path('Audi'), $filename);
                $imagePaths[] = 'Audi/' . $filename;
            }
        }
    
        $imagePath = implode(',', $imagePaths); 
    
        $auditorium = new Auditorium([
            'nameAudi' => $request->input('nameAudi'),
            'capacity' => $request->input('capacity'),
            'description' => $request->input('description'),
            'cost' => $request->input('cost'),
            'images' => $imagePath,
            'admin' => $request->input('admin'),
        ]);
    
        $auditorium->save();
        $auditoriums = Auditorium::all();
    
        return redirect()->route('superadmina')->with('success', 'Auditorium added!');
    }
    public function viewAudi($id)
    {
        $auditorium = Auditorium::find($id);
        $user = User::find($auditorium->admin);
        return view("Super_Admin.view_audi", compact('auditorium', 'user'));
    }
    public function editAudi($id)
    {
        $auditorium = Auditorium::find($id);
        $admins = DB::table('users')
        ->where('role', 'admin')
        ->whereNotExists(function ($query) use ($id) {
            $query->select(DB::raw(1))
                ->from('auditoria')
                ->whereColumn('users.id', 'auditoria.admin')
                ->where('auditoria.id', '<>', $id); 
        })
        ->orWhere('id', $auditorium->admin) 
        ->get();
        return view("Super_Admin.edit_audi",compact('auditorium','admins'));
    }
    public function updateAudi(Request $request, $id)
    {
        $auditorium = Auditorium::find($id);
    
        $request->validate([
            'nameAudi' => 'required',
            'capacity' => 'nullable',
            'description' => 'nullable',
            'cost' => 'required',
            'images.*' => ['mimes:jpeg,png,jpg,gif|max:2048'],
        ]);
        $delete_images = $request->input('delete_images', []);
        $imagePaths = [];
    
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('YmdHi') . $image->getClientOriginalName();
                $image->move(public_path('Audi'), $filename);
                $imagePaths[] = 'Audi/' . $filename;
            }
        }
    
        $existingImages = explode(',', $auditorium->images);
        // Delete images that are no longer selected
        $imagesToKeep = array_diff($existingImages, $delete_images);
        $disk = Storage::getDefaultDriver();
        foreach ($delete_images as $imageToDelete) {
  
            if (Storage::disk($disk)->exists($imageToDelete)) {
                Storage::disk($disk)->delete($imageToDelete);
            }
        }
        $allImages = array_merge($imagesToKeep, $imagePaths);
        // Update images with new ones
        $auditorium->images = implode(',', $allImages);
    
        $auditorium->nameAudi = $request->input('nameAudi');
        $auditorium->capacity = $request->input('capacity');
        $auditorium->description = $request->input('description');
        $auditorium->cost = $request->input('cost');
        $auditorium->admin = $request->input('admin');
        $auditorium->save();
        if (Auth::user()->role == 'superadmin') 
             return redirect()->route('superadmina')->with('success', 'Auditorium updated successfully.');
        else
            return redirect()->route('home',['auditoriumId' => $auditorium->id])->with('success', 'Auditorium updated successfully.');
    }
    public function superadmin()  //Request $request
    {
        $admins = User::where('role','Admin')->get();
        return view("Super_Admin.add_admin",compact('admins'));
    }
    public function addadmin()
    {
        return view("Super_Admin.add_ad");
    }
    public function storead (Request $request)
	{
			$request->validate([
			'firstname' => 'required',
            'lastname' => 'nullable',
            'email' => 'required',
            'password'=>'required',
			]);
		
        $user = new User([
            'firstname'=> $request->input('firstname'),
            'lastname'=> $request->input('lastname'),
            'email'=> $request->input('email'),
            'mobile'=> $request->input('mobile'),
            'address'=> $request->input('address'),
            'password'=>Hash::make( $request->input('password')),
            'role'=> $request->input('role'),
            'faculty'=> $request->input('faculty'),
            'department'=> $request->input('department'),
            'designation'=> $request->input('designation'),
            'nic'=> $request->input('nic'),
            'organization'=> $request->input('organization'),
            'external_address'=> $request->input('external_address'),
            'purpose'=> $request->input('purpose'),
            'image'=> $request->input('image'),
            'usertype'=>$request->input('usertype'),
            'remember_tocken' => Str::random(10)
        ]);
    
        $user->save();
		if ($user->role == 'Admin') {
            return redirect()->route('superadmin')->with('success', 'Admin added!');
        } elseif ($user->role == 'customer') {
            return redirect()->route('verification',['id' => $user->id]);
        }
			
	}
	public function verification ($id)
	{
				$user = User::where('id', $id)->first(); 
				if(!$user || $user->is_verified == 1) 
					{ 
					return redirect('/');
					}
					$email = $user->email;
					
					
				$this->sendOtp($user); //OTP SEND

				return view('mail.verification', compact('email'));

	}

	public function verifiedOtp (Request $request)
	{
		$user =User::where('email', $request->email)->first();
		$otpData = EmailVerification::where('otp', $request->otp)->first();

		if(!$otpData) 
			{
			return response()->json(['success' => false, 'msg' => 'You entered wrong OTP']);
			}
		else
		{
			
			$currentTime = time();
			$time = strtotime($otpData->created_at);
			if($currentTime >= $time && $time >= $currentTime - (90 + 5))
			{
				User::where('id', $user->id)->update([ 
				'is_verified' => 1
				]);
				return response()->json(['success' => true, 'msg' => 'Mail has been verified']);
			}
			else
			{
				return response()->json(['success' => false, 'msg' => 'Your OTP has been Expired']);
			}

		}
	}


	public function sendOtp ($user) 
	{
		$otp = rand(100000, 999999);

		$time =time();

		EmailVerification::updateOrCreate(

			['email' => $user->email],

			['email' => $user->email, 

			'otp' => $otp,

			'created_at' => $time,
            
            'updated_at'=> $time]
		);
		
		$data['email'] = $user->email;

		$data['title'] = 'Mail Verification';

		$data['body'] = "Hello,

        Welcome to the Auditorium booking management system. We're delighted to have you as part of our community.
        
        To verify your account, please use the following OTP (One-Time Password):  $otp .
        
        If you didn't request this OTP or have any questions, please contact our support team. We're here to assist you.
        
        Best regards,
        The Auditorium Team";

         $super=User::where('role','superadmin')->first();
        $data['from'] =$super->email;
		$superadmin=$super->firstname;
        Mail::send('mail\mailVerification', ['data' => $data], function ($message) use ($data) {
            $message->to($data['email'])->subject($data['title']);
            $message->from($data['from'],'superadmin');
        });
	}
	public function resendOtp (Request $request)
	{
		$user = User::where('email', $request->email)->first();
		$otpData = EmailVerification::where('email', $request->email)->first(); 
		
		$currentTime = time();
		$time = strtotime($otpData->created_at); 
		if ($currentTime >= $time && $time >= $currentTime - (90 + 5)) 
		{//90 seconds 
			return response()->json(['success' => false, 'msg'=> 'Please try after some time']); 
		}
		else
		{
			$this->sendOtp($user); //OTP SEND
			return response()->json(['success' => true, 'msg'=> 'OTP has been sent']);
		}
	}
    public function viewAd($id)
    {
        $admin = User::find($id);
        return view("Super_Admin.view_admin",compact('admin'));
    }
    public function destroy($id)
    {
        //
        $admin = User::find($id);
        $admin->delete();

        return redirect()->route('superadmin')->with('success','Admin Deleted! ');
    } 
    public function forgotpassword()
    {
        return view('forgotpassword');
    }
    public function forgetpasswordlord(Request $request)
    {
        try{
            $user=User::where('email',$request->email)->get();

            if(count($user)>0)
            {
                $token=Str::random(40);
                $domain=URL::to('/');
                $url=$domain.'/reset-password?token='.$token;

                $data['url'] = $url;

                $data['email'] = $request->email;

                $data['title'] = 'Password Reset';

                $data['body'] = 'Please click on below link to reset your password.';

                $super=User::where('role','superadmin')->first();
                $data['from'] =$super->email;

                Mail::send('forgotPasswordMail', ['data'=>$data], function ($message) use ($data){
                     $message->to ($data['email'])->subject($data['title']);
                     $message->from($data['from'],'superadmin');});
                $dateTime =Carbon::now()->format('Y-m-d H:i:s');

                PasswordReset::updateOrCreate(
                    ['email'=>$request->email],
                    [
                        'email'=>$request->email,
                        'token'=>$token,
                        'created_at'=>$dateTime
                    ]
                );
                return back()->with('success','Please check your mail to reset your password!');

            }else{
                return back()->with('error','Email is not exists!');
            }
        }catch(\Exception $e)
        {
            return back()->with('error',$e->getMessage());
        }
    }
    public function resetpassword (Request $request)
    {
        $resetData = PasswordReset::where('token', $request->token)->get();

        if(isset($request->token) && count($resetData) >= 1)
        {
            $user = User::where('email', $resetData[0]['email'])->get();
            
            return view('resetpassword', compact('user'));
        }else
        {

        return view('404');
        }

    }
    public function resetpasswordlord(Request $request)
    {
        $request->validate([
            'password' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d@$!%*#?&]{5,}$/',
        ]);
    
        if (strcmp($request->get('password_confirmation'), $request->get('password')) !== 0) {
            return back()->with('error', 'Confirm password does not match. Please check again.');
        }
    
        $user = User::find($request->id);
        $user->password = Hash::make($request->password);
        $user->save();
    
        try {
            PasswordReset::where('email', $user->email)->delete();
        } catch (\Exception $e) {
            // Log or report the error for debugging purposes
            return back()->with('error', 'An error occurred while deleting the password reset record.');
        }
    
        return redirect()->route('login')->with('success', 'Your password has been reset successfully.');
    }
    
}