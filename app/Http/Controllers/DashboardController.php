<?php

namespace App\Http\Controllers;
use App\Models\Auditorium;
use App\Models\Facility;
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
        $faci=Facility::where('auditorium',$auditoriumId)->get();
        return view("table",compact('auditorium','faci'));
    }
    public function tableadd($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("table.addfacility",compact('auditorium'));
    }
    public function upevent($auditoriumId)
    {
        $auditorium = Auditorium::find($auditoriumId);
        return view("upcomingevent",compact('auditorium'));
    }
}
