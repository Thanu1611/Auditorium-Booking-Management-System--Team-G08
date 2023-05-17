@extends('Layouts.role')
@section('content')
<div class="main" style="display:flex; flex-direction:row;width:1050px; height:600px; margin-top:80px; padding:10px">

  <div class="col-md-8">
    <div  >

          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
            <img src="/images/lib.jpg" class="d-block w-100" alt="..." height="580">
            </div>
          </div>
    </div> 
  </div>
  <div class="button-col-md-4 style="padding:10px; background-color:#edede9">
      <div style="margin-left:10px; margin-top:20px">
        <h3 style="font-weight:bold"> WELCOME </h3> <br>
        <p style="text-align:justify"> 
          welcome to the library admin page
        </p>
      </div>
  </div>
</div>

@endsection