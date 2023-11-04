<?php

namespace App\Http\Controllers;
use App\Models\Auditorium;
use App\Models\Facility;
use App\Models\Event;
use Illuminate\Http\Request;
use Auth;
use Validator;
use Illuminate\Support\Facades\DB;

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
        $events = $auditorium->events;
        return view("upcomingevent",compact('auditorium','events'));
    }
}
