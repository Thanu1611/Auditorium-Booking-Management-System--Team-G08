@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')
<style type="text/css">
    .chartfont{
        font-size:35px;
        font-weight:900;
    }
    .div2 {
        background-color: white;
        border-radius:15px;
        padding:20px;
        justify-content: center;
    }

    .div3 {
        background-color: white;
        border-radius:15px;
        padding:20px;
        justify-content: center;
    }

</style>
    
<body >
 
    <div class="container">
        <div class="chartfont div2" style="box-shadow: 0 0 20px 2px #295939">
            <h3 style="text-align: center"> Total Booking for year </h3>
            
            <div class="chart" role="group" aria-label="Basic radio toggle button group">
                <a class="btn btn-outline-success" id="btnradio1" onclick="redirectToMonthChart()" role="button">Month</a>
                <a class="btn btn-outline-success" id="btnradio2" onclick="redirectToYearChart()" role="button">Year</a>
            </div>
            <canvas id="myChart" width=1000px height="350%"></canvas>
        </div>
        <br><br>
    </div>
    <br>
<div class="col-12" style="padding:5px">
    <a role="button" href="{{route('home',['auditoriumId' =>$auditorium->id])}}"class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 16%;height: 40px;"> << Previous </a>
    </div>
</body>
  


@endsection