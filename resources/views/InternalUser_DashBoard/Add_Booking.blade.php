@extends('Layouts.userRole')
@section('content')
<form class="main" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
        <div ><h3>Add Booking</h3></div>
        <hr>
        <label for="auditorium_selection">Auditorium Type : </label> <br>
          <select name="auditorium_selection" class="form-select" multiple aria-label="multiple select example">
            <option selected>Select the menu</option>
            <option value="type1">Library Mini Auditorium</option>
            <option value="type1">Kailasapthy</option>
            <option value="type1">Physics Auditorium</option>
            <option value="type1">DCS Auditorium</option>
          </select>
          <br>
          
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" placeholder="Name of the event"/> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" placeholder="Details"/> <br>                                                       
          <label for="booking_date">Booking Date : </label> <br>
            <input type="date"  id="booking_date" name="booking_date"> <br>
            <label for="booking_date">Do you need any extra date for hall decoration?</label><br>
            <input type="radio" id="sample" name="Extra-date" value="yes" onchange="toggleUserFields(this.value)">
            <label for="extra-yes">Yes</label>

            <input type="radio" id="sample" name="Extra-date" value="no" onchange="toggleUserFields(this.value)">
            <label for="extra-no">No</label><br>

            <div id="yes" style="display: none;">
              <input type="number" name="days" placeholder="How many days do you need?">
            </div>
        <br>
          <label for="booking_time">Booking Time : </label> <br>
          <select name="booking_time" class="form-select" multiple aria-label="multiple select example">
            <option selected>Select the menu</option>
            <option value="slot1">08.00-09.00</option>
            <option value="slot1">09.00-10.00</option>
            <option value="slot1">10.00-11.00</option>
            <option value="slot1">11.00-12.00</option>
            <option value="slot1">12.00-13.00</option>
            <option value="slot1">13.00-14.00</option>
            <option value="slot1">14.00-15.00</option>
            <option value="slot1">15.00-16.00</option>
            <option value="slot1">16.00-17.00</option>
            <option value="slot1">17.00-18.00</option>
            <option value="slot1">Full day</option>
            <option value="slot1">Morning Half day</option>
            <option value="slot1">Evening Half day</option>
          </select>
          
          <br>

    <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Type</div> <br>
      <label  for="Catering"> Will be Catering : </label> <br>
      <input type="radio"  id="sample" name="Catering">Yes
      <input type="radio"  id="sample" name="Catering">No <br>

      <label for="AC_Type">AC type: </label><br>
      <input type="radio" id="sample" name="AC">AC
      <input type="radio" id="sample" name="AC">NON AC
    
      <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Specific Needs</div> <br>
      <input type="text" placeholder="needs"/> <br> 
    <button type="submit" class="button" >Booking</button>
</div>
</form>
<script>
  function toggleUserFields(extraDate) {
    const yesDiv = document.getElementById("yes");

    if (extraDate === "yes") {
      yesDiv.style.display = "block";
      clearInternalFields();
    } else {
      yesDiv.style.display = "none";
      clearInternalFields();
    }
  }

  function clearInternalFields() {
    document.getElementsByName("days")[0].value = "";
  }
</script>
@endsection

 