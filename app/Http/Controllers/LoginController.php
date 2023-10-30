<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
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

        if(Auth::attempt($user_data)){
            if(Auth::user()->role == 'admin')
                return view('Admin_Dashboard.admin_welcome');
            else if(Auth::user()->role == 'superadmin')
                return view('Super_Admin.dashboard');
            else if(Auth::user()->role == 'internal')
                return view('InternalUser_DashBoard.user_welcome');
            else if(Auth::user()->role == 'external')
                return view('ExternalUser_DashBoard.user_welcome');
        }
        else{
            return back()->with('error-login', 'WRONG LOGIN DETAILS');
        }
    }

    public function register(Request $request)
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
            'faculty' => $request->get('faculty'),
            'department' => $request->get('department'),
            'designation' => $request->get('designation'),
            'nic' => $request->get('nic'),
            'organization' => $request->get('organization'),
            'purpose' => $request->get('purpose'),
            'external-address' => $request->get('external-address'),
            'password' => Hash::make($request->get('password')),
            'remember_tocken' => Str::random(10)
        ]);

        $user->save();

        if($user){
            return redirect()->back()->with('success-login', 'User Created Successfully');
        }
        else{
            return redirect()->back()->with('error-signup', 'User Not Created');
        }
        
    }
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
