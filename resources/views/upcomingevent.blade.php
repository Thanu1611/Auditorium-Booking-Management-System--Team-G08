@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')

<div class="main" style="display: flex; flex-direction: row; flex-wrap: wrap; width: 1004px; margin-top: 80px; padding: 10px;">
    <div class="card" style="width: 50%; flex-grow: 0; flex-shrink: 0; margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="card-title">title</h5>
        <p class="card-text">Date: date </p>
        <p class="card-text">Time: time </p>
        <p class="card-text">Location: location </p>
        <a role="button" href="#"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 37%;height: 40px;"> Show Full Details </a>
      </div>
    </div>
    <div class="card" style="width: 50%; flex-grow: 0; flex-shrink: 0; margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="card-title">title</h5>
        <p class="card-text">Date: date </p>
        <p class="card-text">Time: time </p>
        <p class="card-text">Location: location </p>
        <a role="button" href="#"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 37%;height: 40px;"> Show Full Details </a>
      </div>
    </div>
    <div class="card" style="width: 50%; flex-grow: 0; flex-shrink: 0; margin-bottom: 10px;">
      <div class="card-body">
        <h5 class="card-title">title</h5>
        <p class="card-text">Date: date </p>
        <p class="card-text">Time: time </p>
        <p class="card-text">Location: location </p>
        <a role="button" href="#"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 37%;height: 40px;"> Show Full Details </a>
      </div>
    </div>
    <div class="col-12" style="padding:5px">
  <a role="button" href="{{route('home',['auditoriumId' =>$auditorium->id])}}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
  </div>
</div>



@endsection
