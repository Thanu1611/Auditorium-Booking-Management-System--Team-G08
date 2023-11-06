<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Event;
use App\Models\Auditorium;
use App\Models\Facility;
use Auth;
use Validator;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.signupLogin');
    }

    public function login(Request $request){
        
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d@$!%*#?&]{5,}$/'
        ]);

        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );


        if (Auth::attempt($user_data)) {
            if (Auth::user()->role == 'superadmin') {
                return redirect()->route('superadmin');
            } elseif (Auth::user()->role == 'admin') {
                // Check if the admin is associated with an auditorium
                $adminId = Auth::user()->id;
                $auditorium = Auditorium::where('admin', $adminId)->first();
    
                if ($auditorium) {
                    $auditoriumId = $auditorium->id;
                    return redirect()->route('home', ['auditoriumId' => $auditoriumId]);
                } else {
                    return back()->with('error-login', 'No associated auditorium found');
                }
            } elseif (Auth::user()->role == 'customer') {
                $userId = Auth::user()->id;
                return redirect()->route('addbookcus', ['userId' => $userId]);
            }
        } else {
            return back()->with('error-login', 'WRONG LOGIN DETAILS');
        }
    }
    public function home($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view('Admin_Dashboard.admin_welcome',compact('auditorium'));
    }
   /* public function addbook($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view('Admin_Dashboard.Add_Booking',compact('auditorium'));
    }*/
    public function viewbook($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        $events = $auditorium->events;
        $user = User::all();
        return view('Admin_Dashboard.View_Booking',compact('auditorium','events','user'));
    }
    public function addbookcus($userId)
    {
        $user = User::find($userId);
        $auditoriums = Auditorium::where('id', '!=', 1)->get();
        $takenDates = DB::table('events')->pluck('booking_date')->toArray();
        //$facilities = Facility::all();
        return view('InternalUser_DashBoard.Add_Booking',compact('user','auditoriums','takenDates'));
    }
    public function getFacilitiesForAuditorium(Request $request) {
        $auditoriumId = $request->input('auditorium');
        $facilities = Facility::where('auditorium', $auditoriumId)
            ->get();
        return response()->json($facilities);
    }    
    public function viewbookcus($userId)
    {
        $user = User::find($userId);
        $audi = Auditorium::all();
        $events = $user->events;
        
        return view('InternalUser_DashBoard.View_Booking',compact('user','events','audi'));
    }
    public function superadmindash()
    {
        return view("Super_Admin.dashboard");
    }

public function calculateCost(Request $request)
{
    $selectedFacilityIds = $request->input('facilities');
    $auditoriumId = $request->input('auditorium');
    $startTime = $request->input('startTime');
    $endTime = $request->input('endTime');

    // Calculate the total cost for selected facilities
    $totalCost = Facility::whereIn('id', $selectedFacilityIds)->sum('cost');

    // Check if 'hour_payment' facility is associated with the auditorium
    $hourPaymentCost = Facility::where('auditorium', $auditoriumId)
        ->where('nameFacility', 'hour_payment')
        ->value('cost');

    if ($hourPaymentCost !== null) {
        // Calculate the cost based on start_time and end_time for 'hour_payment'
        $totalHours = calculateHours($startTime, $endTime);
        $hourPaymentTotalCost = $hourPaymentCost * $totalHours;

        // Add the 'hour_payment' cost to the total cost
        $totalCost += $hourPaymentTotalCost;
    }

    return response()->json(['cost' => $totalCost]);
}

// Function to calculate hours between start_time and end_time
function calculateHours($startTime, $endTime)
{
    // Convert the time strings to DateTime objects
    $start = \DateTime::createFromFormat('H:i', $startTime);
    $end = \DateTime::createFromFormat('H:i', $endTime);

    // Calculate the time difference in hours
    $interval = $start->diff($end);
    $hours = $interval->h;
    $minutes = $interval->i;
    $totalHours = $hours + ($minutes / 60);

    return $totalHours;
}

    
    /*public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|alphaNum|min:5'
        ]);

        $user = new User([
            'firstname' => $request->get('firstname'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'address' => $request->get('address'),
            'mobile' => $request->get('mobile'),
            'role' => $request->get('role'),
            'usertype' => $request->get('usertype'),
            'faculty' => $request->get('faculty'),
            'department' => $request->get('department'),
            'designation' => $request->get('designation'),
            'nic' => $request->get('nic'),
            'organization' => $request->get('organization'),
            'purpose' => $request->get('purpose'),
            'external_address' => $request->get('external_address'),
            'image' => $request->get('image'),
            'password' => Hash::make($request->get('password')),
            'remember_tocken' => Str::random(10)
        ]);

        $user->save();

        if($user){
            return redirect()->back()->with('success-signup', 'User Created Successfully');
        }
        else{
            return redirect()->back()->with('error-signup', 'User Not Created');
        }
        
    }*/
    function logout()
    {
        auth::logout();
        return view('Auth.signupLogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
