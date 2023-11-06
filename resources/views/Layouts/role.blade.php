<html>
    <head>
        <title>ABMS</title>
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/Auth/layout.css') }}" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.bunddle.min.js') }}" ></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  
    </head>

 
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

<symbol id="home" viewBox="0 0 16 16">
  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
</symbol>
<symbol id="addbook" viewBox="0 0 24 24">
  <path d="M 12 2 C 6.4889971 2 2 6.4889971 2 12 C 2 17.511003 6.4889971 22 12 22 C 17.511003 22 22 17.511003 22 12 C 22 6.4889971 17.511003 2 12 2 z M 12 4 C 16.430123 4 20 7.5698774 20 12 C 20 16.430123 16.430123 20 12 20 C 7.5698774 20 4 16.430123 4 12 C 4 7.5698774 7.5698774 4 12 4 z M 11 7 L 11 11 L 7 11 L 7 13 L 11 13 L 11 17 L 13 17 L 13 13 L 17 13 L 17 11 L 13 11 L 13 7 L 11 7 z"/>
</symbol>
<symbol id="viewbook" viewBox="0 0 16 16">
<path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
</symbol>
<symbol id="audi" viewBox="0 0 16 16">
<path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
</symbol>
<symbol id="logout" viewBox="0 0 16 16">
  <<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</symbol>

<symbol id="admin" viewBox="0 0 16 16">
<path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
  <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
</symbol>
<symbol id="auditoria" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Z"/>
  <path d="M2 1a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v6.5a.5.5 0 0 1-1 0V1H3v14h3v-2.5a.5.5 0 0 1 .5-.5H8v4H3a1 1 0 0 1-1-1V1Z"/>
  <path d="M4.5 2a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm-6 3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Zm3 0a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1Z"/>
</symbol>
</svg>

<body>
<div class="layoutmain" style="display:flex; position:fixed; top:0; width:100%"> 
    <div class="col-md-6" style="display:flex">
        <img src="/images/audi2.png" style="width:60px; height:60px" alt="hos_logo">
        <h4  style="padding:10px; color:#302b63; font-weight:bold; margin-top:1%">Auditorium Booking Management System</h4>
    </div> 
     
    <div class="col-md-6" style="margin-left:10%; margin-right:1%">
    @if(Auth::user()->role == 'admin')
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            @php
                $auditoriumId = $auditorium ? $auditorium->id : null;
            @endphp
            <li>
              <a href="{{ route('home', ['auditoriumId' => $auditoriumId]) }}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Dashboard
              </a>
            </li>
            <li>
              <a href="{{ route('viewbook',['auditoriumId' => $auditoriumId])}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#viewbook"/></svg>
                View Booking
              </a>
            </li>
            <li>
              <a href="{{route('logout')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#logout"/></svg>
                Logout
              </a>
            </li>
          </ul>
    @elseif(Auth::user()->role == 'superadmin') 
    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
           <!--   <li>
            <a href="{{ route('superdash')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"/></svg>
                Dashboard
              </a>
            </li>-->

            <li>
              <a href="{{ route('superadmin')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#admin"/></svg>
                Add Admin
              </a>
            </li>
            <li>
              <a href="{{ route('superadmina')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#auditoria"/></svg>
                Add Auditorium
              </a>
            </li>
            <li>
              <a href="{{route('logout')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#logout"/></svg>
                Logout
              </a>
            </li>
          </ul>
          @elseif(Auth::user()->role == 'customer') 
          @php
            $userId = $user->id;
           @endphp
    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="{{ route('addbookcus',['userId' => $userId])}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#addbook"/></svg>
                Add booking
              </a>
            </li>
            <li>
              <a href="{{ route('viewbookcus',['userId' => $userId])}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#viewbook"/></svg>
                View Booking
              </a>
            </li>
            <li>
              <a href="{{route('logout')}}" class="nav-link text-black">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#logout"/></svg>
                Logout
              </a>
            </li>
          </ul>
          @endif
    </div>
    </div><br>

  <div >
    <div class="container">
    <script src="{{ asset('css/Auth/verification.js') }}" type="text/javascript"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      @yield('content') 

    </div>
  </div>

</body>


