<?php

namespace App\Http\Controllers;
use App\Models\Auditorium;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function audiupdate($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("audiupdate",compact('auditorium'));
    }
    public function graph($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("graph",compact('auditorium'));
    }
    public function table($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("table",compact('auditorium'));
    }
    public function tableadd()
    {
        return view("table.addfacility");
    }
    public function upevent($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("upcomingevent",compact('auditorium'));
    }
}
