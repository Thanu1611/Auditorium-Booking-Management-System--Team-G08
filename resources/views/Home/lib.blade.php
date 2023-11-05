@extends('Home.new')
@section('content')
<div class="main" style="display:flex; flex-direction:row;width:1350px; height:900px; margin-top:80px; padding:10px">
    
<div class="container px-4 py-5">

<div class="col-12" style="padding:5px; position: relative;
        top: -50px;" >
            <a role="button"  href="{{route('welcome')}}" class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
        </div>

    <h3 style="  color: #573b8a";>Library Mini Auditorium</h3>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
<div  >

<div >
  <div  class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></button>
      
    </div>

        <div class="carousel-inner">
          <div class="carousel-item " data-bs-interval="2000">
          <img src="/images/L1.jpg" class="d-block w-100" alt="..." height="600">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
          <img src="/images/L2.jpg" class="d-block w-100" alt="..." height="600">
          </div>
          <div class="carousel-item active" data-bs-interval="2000">
          <img src="/images/L3.JPG" class="d-block w-100" alt="..." height="600">
          </div>
          
        </div>
        
  </div> 
</div>
      </div>

      <div class="text-container" style="margin-bottom: -450px;">
      <div class="text-container">
    <h3>Details</h3>
    <br>
    <h5>
    <p style="margin-bottom: 5px;"> &#x2714; This auditorium has a seating capacity of 300. <br></p>
    <p style="margin-bottom: 6px;"> &#x2714; AC/Non AC.<br></p>
    <p style="margin-bottom: 6px;"> &#x2714; Multimedia projector.<br></p>
    <p style="margin-bottom: 6px;"> &#x2714; Cordium Microphone.<br></p>
    <p style="margin-bottom: 6px;"> &#x2714; Flat Floor Seating System.<br></p>
    
</p>
</div>
    <style> .text-container {
        position: relative;
        top: -200px; /* Adjust the value as needed */
    }</style>

        </div>
      </div>
    </div>
  </div>

@endsection