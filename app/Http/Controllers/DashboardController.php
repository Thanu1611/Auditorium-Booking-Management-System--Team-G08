<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function audiupdate()
    {
        return view("audiupdate");
    }
    public function graph()
    {
        return view("graph");
    }
    public function table()
    {
        return view("table");
    }
    public function tableadd()
    {
        return view("table.addfacility");
    }
    public function upevent()
    {
        return view("upcomingevent");
    }

}
