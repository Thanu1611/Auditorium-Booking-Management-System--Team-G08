@extends('Layouts.role')
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
   <div class="main" style="width:1000px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
    <div class="container">
        <div class="chartfont div2" style="box-shadow: 0 0 20px 2px #295939">
            <h3 style="text-align: center"> Total Booking for year </h3>
            
            <div class="chart" role="group" aria-label="Basic radio toggle button group">
                <a class="btn btn-outline-success" id="btnradio1" onclick="redirectToMonthChart()" role="button">Month</a>
                <a class="btn btn-outline-success" id="btnradio2" onclick="redirectToYearChart()" role="button">Year</a>
            </div>
            <canvas id="myChart" height="100%"></canvas>
        </div>
        <br><br>
        <div class="chartfont div3" style="box-shadow: 0 0 20px 2px #241468">
            <h3 style="text-align: center"> Auditorium_Status </h3><br>
            <canvas id="myChart2" height="50%"></canvas>
        </div>
        <br><br><br>
        <div class="chartfont div3" style="box-shadow: 0 0 20px 2px #1C658C">
            <h3 style="text-align: center"> Auditorium Entry Monthly </h3>
            <canvas id="myChart3" height="100%"></canvas>
        </div>
    </div>
    <br>
    <div class="col-12" style="padding:5px">
    </div>
</div>
</body>
  


@endsection