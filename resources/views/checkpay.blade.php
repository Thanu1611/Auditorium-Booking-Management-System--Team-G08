@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')
<form method='post' action="{{route('confirmpay',['eventId' => $event->id]) }}" class="main" enctype="multipart/form-data" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
@csrf
@method('PUT')
        <div ><h3>Payment</h3></div>
        <hr>
        @php
        $cus = $user->where('id', $event->user)->first();
        @endphp
          <label for="grid-first-name">Name of the Customer : </label><br>
            <input type="text"  value='{{$cus->firstname}} {{$cus->lastname}}' id="input" readonly/> <br>
          <label for="grid-last-name">Total of the cost:</label><br>
            <input type="text" name='cost' value='{{$event->cost}}' readonly/> <br>     
            <label for="images">Bank Deposit Receipt:</label>
            <br>
            <div class="zoom-image-container" id="zoom-image-container">
                <img src="{{ url($event->payment) }}" style="height: 150px; width: 150px;" class="zoom-image" alt="Receipt">
            </div>
            <br>    
            <div class="overlay" id="image-overlay">
                <img src="{{ url($event->payment) }}" alt="Zoomed Receipt">
                <a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 15%;height: 40px;" onclick="zoomOutImage()" class="zoom-out-button">Zoom Out</a>
            </div>
            <button type="submit" class="button" >confirm the booking</button>
            <div class="col-12" style="padding:5px">
  <a role="button" href="{{route ('viewbook',['auditoriumId' => $event->auditorium]) }}" class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
  </div>                                            
</form>

<script>
    function zoomInImage() {
        // Toggle the active class on the overlay
        document.getElementById('image-overlay').classList.toggle('active');
    }

    function zoomOutImage() {
        // Toggle the active class on the overlay
        document.getElementById('image-overlay').classList.toggle('active');
    }

    // Add an event listener to the zoom-image-container for zooming in
    document.getElementById('zoom-image-container').addEventListener('click', function() {
        zoomInImage();
    });
</script>

</script>
@endsection