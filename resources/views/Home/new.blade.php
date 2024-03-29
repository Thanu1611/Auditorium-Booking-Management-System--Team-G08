<html >
    <head>
        <title>ABMS</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/Auth/layout.css') }}" rel="stylesheet">
    </head>
   
 
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">



<symbol id="login" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
      <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</symbol>

<symbol id="home" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</symbol>

</svg>
<body>
<div class="layoutmain" style="display:flex; position:fixed; top:0; width:100%"> 
    <div class="col-md-6" style="display:flex">
        <img src="/images/audi2.png" style="width:60px; height:60px" alt="hos_logo">
        <h4  style="padding:10px; color:#302b63; font-weight:bold; margin-top:1%">Auditorium Booking Management System</h4>
 </div><br>

    <div class="col-md-6" style="margin-left:10%; margin-right:1%">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small" style="margin-left: 280px; ">
        <li>
              <a href="{{route('welcome')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Home
              </a>
            </li>
         <li >
              <a href="{{route('login')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#login"/></svg>
                Login
              </a>
            </li>

          </ul>
 
    </div>
    </div> 
    
</div>




    <div >
    <div class="container">
      @yield('content') 
    </div>
  </div>
</body>