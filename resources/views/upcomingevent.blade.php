@extends('Layouts.role', ['auditorium' => $auditorium])
@section('content')

<div class="main" style="display: flex; flex-direction: row; flex-wrap: wrap; width: 1004px; margin-top: 80px; padding: 10px;">
    @php
    $today = now()->format('Y-m-d'); // Get the current date in the format 'Y-m-d'
    $events = $auditorium->events()->where('booking_date', '>=', $today)->where('payment_status','=','done')->get(); // Fetch events for today and the future
    @endphp

    @foreach ($events as $event)
    <div class="card" style="width: 50%; flex-grow: 0; flex-shrink: 0; margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="card-title">{{ $event->nameEvent }}</h5>
        <p class="card-text">Date: {{ $event->booking_date }}</p>
        <p class="card-text">Time: {{ $event->booking_time }}</p>
        <p class="card-text">Details: {{ $event->detail_event }}</p>
        <a role="button" href="#" class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 37%;height: 40px;"> Show Full Details </a>
      </div>
    </div>
    @endforeach

    <div class="col-12" style="padding:5px">
      <a role="button" href="{{ route('home', ['auditoriumId' => $auditorium->id]) }}" class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
    </div>
</div>
@endsection
