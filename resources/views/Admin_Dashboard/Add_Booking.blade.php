@extends('Layouts.role')
@section('content')
        <form class="main" style="width:550px; height:750px; margin-top:90px; padding:20px">
        <div ><h3>Add Booking</h3></div>
        <hr>
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" placeholder="Name of the event"/> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" placeholder="Details"/> <br>
          <label for="booking_date">Booking Date : </label> <br>
            <input type="date"  id="booking_date" name="booking_date"> <br>
          <label for="booking_time">Booking Time : </label> <br>
            <input type="radio" id="sample" name="booking_time">Full day
            <input type="radio" id="sample" name="booking_time">First half day
            <input type="radio" id="sample" name="booking_time">Second half day <br>

    <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Type</div> <br>
      <label  for="Catering"> Will be Catering : </label> <br>
      <input type="radio"  id="sample" name="Catering">Yes
      <input type="radio"  id="sample" name="Catering">No <br>

      <label for="AC_Type">AC type: </label><br>
      <input type="radio" id="sample" name="Catering">AC
      <input type="radio" id="sample" name="Catering">NON AC

    <button type="submit" class="button" >Booking</button>
</div>
</form>
@endsection

 