<!DOCTYPE html>
<html>
    <head>
        <title>ABMS</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/Auth/layout.css') }}" rel="stylesheet">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-left" viewBox="0 0 16 16">
    

      <symbol id="login" viewBox="0 0 16 16">
      <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-2a.5.5 0 0 1 1 0v2A1.5 1.5 0 0 1 9.5 14h-8A1.5 1.5 0 0 1 0 12.5v-9A1.5 1.5 0 0 1 1.5 2h8A1.5 1.5 0 0 1 11 3.5v2a.5.5 0 0 1-1 0v-2z"/>
      <path fill-rule="evenodd" d="M4.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H14.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
</symbol></svg>
        <style>
.button {
  border: none;
  color: white;
  padding: 3px 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.2s;
  cursor: pointer;
}

.button1 {
  background-color: #f350a4; 
  color:white; 
  border: 1px solid #f350a4;
}



</style>
    </head>

 
   

<body>
<div class="layoutmain" style="display:flex; position:fixed; top:0; width:100%"> 
    <div class="col-md-6" style="display:flex">
        <img src="/images/audi2.png" style="width:60px; height:60px" alt="hos_logo">
        <h4  style="padding:10px; color:#302b63; font-weight:bold; margin-top:1%">Auditorium Booking Management System</h4>
 </div><br>
     
    <div class="col-md-6" style="margin-left:10%; margin-right:1%">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            
           
           
            <li style="margin-left: 340px; ">
              <a href="{{route('login')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#login"/></svg>
                Login
              </a>
            </li>
          </ul>
 
    </div>
    
    </div><br>

    
    <div class="container">
    <div class="container">
        <h3 style="margin-bottom: 50px; color: #885"> Welcome to Auditorium Booking Management System Of University Of Jaffna</h3>
</div>
        <div class="row">
            <div class="col-md-6">
                @yield('section1')
            </div>
            <div class="col-md-6">
                @yield('section2')
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @yield('section3')
            </div>
            <div class="col-md-6">
                @yield('section4')
            </div>
        </div>
    </div>
</body>
</html>