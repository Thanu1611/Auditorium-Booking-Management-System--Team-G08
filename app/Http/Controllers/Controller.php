<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function admin_addbook()
    {
        return view('Admin_Dashboard.Add_Booking');
    }
    public function admin_viewbook()
    {
        return view('Admin_Dashboard.View_Booking');
    }
}
