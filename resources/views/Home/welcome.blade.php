<html lang="en">
    <head>
        <title>ABMS</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    
    </head>
    <body>
  
    <div style="margin-left:10px; margin-right:10px; border:5px solid purple;padding:25px">
        <div class="btn-primary" style="padding:10px"><h1 style="text-align:center">Audtorium Booking MS</h1></div>
        <br>
        <br>
        <br>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }
  </style>

</head>
<body>

<div class="navbar">
  
  <div class="dropdown">
    <button class="dropbtn">Auditoriums 
      
    </button>
    <div class="dropdown-content">
      <a href ="K">Kailasapahy Auditorium</a>
      <a href="C">CSC Auditorium</a>
      <a href="L">Library Auditorium</a>
      <a href="P">Physics Mini Auditorium</a>
    </div>
  </div> 
</div>

            <div class="container">
                @yield('content')
            </div>
    </div>
    <div class="container">  
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://www.jfn.ac.lk/wp-content/uploads/2017/02/Prof.s.Maheswaran-Memorial-Lecture-2017_34.jpg" alt="Los Angeles" width="800" height="1080" class="center">
      </div>

      <div class="item">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYAP-x13nqeVFf_ZqSlbReG_oP6-Z5LDQtgQ&usqp=CAU" alt="Chicago" width="800" height="1080" class="center">
      </div>
    
      <div class="item">
        <img src="https://itum.mrt.ac.lk/sites/default/files/inline-images/1_0.jpg" alt="New york" width="800" height="1080" class="center">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control"  data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control"  data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
 
</div>

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myAuditoriums").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myAuditoriums = document.getElementById("myAuditoriums");
    if (myAuditoriums.classList.contains('show')) {
      myAuditoriums.classList.remove('show');
    }
  }
}
</script>

    </body>
</html>