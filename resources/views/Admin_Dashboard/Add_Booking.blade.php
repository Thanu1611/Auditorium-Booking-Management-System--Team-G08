@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')
<form class="main" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
        <div ><h3>Add Booking</h3></div>
        <hr>
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" name="nameEvent" placeholder="Name of the event"/> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" name="detail_event" placeholder="Details of the event"/> <br>                                                       
          <label for="booking_date">Booking Date : </label> <br>
            <input type="date"  id="booking_date" name="booking_date"> <br>
            <label for="booking_date">Do you need any extra date for hall decoration?</label><br>
            <input type="radio" id="sample" name="extra_date" value="yes" onchange="toggleUserFields(this.value)">
            <label for="extra-yes">Yes</label>

            <input type="radio" id="sample" name="extra_date" value="no" onchange="toggleUserFields(this.value)">
            <label for="extra-no">No</label><br>

            <div id="yes" style="display: none;">
              <input type="number" name="days" placeholder="How many days do you need?">
            </div>
        <br>
          <label for="booking_time">Booking Time : </label> <br>
          <select name="booking_time" class="form-select" multiple aria-label="multiple select example">
            <option selected>Select the menu</option>
            <option value="08.00-09.00">08.00-09.00</option>
            <option value="09.00-10.00">09.00-10.00</option>
            <option value="10.00-11.00">10.00-11.00</option>
            <option value="11.00-12.00">11.00-12.00</option>
            <option value="12.00-13.00">12.00-13.00</option>
            <option value="13.00-14.00">13.00-14.00</option>
            <option value="14.00-15.00">14.00-15.00</option>
            <option value="15.00-16.00">15.00-16.00</option>
            <option value="16.00-17.00">16.00-17.00</option>
            <option value="17.00-18.00">17.00-18.00</option>
            <option value="Full day">Full day</option>
            <option value="Morning Half day">Morning Half day</option>
            <option value="Evening Half day">Evening Half day</option>
          </select>
          
          <br>

    <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Type</div> <br>
      <label  for="Catering"> Will be Catering : </label> <br>
      <input type="radio"  id="sample" name="catering">Yes
      <input type="radio"  id="sample" name="catering">No <br>

      <label for="AC_Type">AC type: </label><br>
      <input type="radio" id="sample" name="ac">AC
      <input type="radio" id="sample" name="ac">NON AC
    
      <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Specific Needs</div> <br>
      <input type="text" name="needs" placeholder="needs"/> <br> 
      <input type="hidden" name="auditorium" value="{{$auditorium->id}}">
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
      <input type="hidden" name="payment" value="">
      <input type="hidden" name="cost" value="">

    <button type="submit" class="button" >Booking</button>
</div>
</form>

@endsection

 