@extends('Layouts.role',['user' => $user])
@section('content')
@if ($errors->any())
              <div class="alert alert-danger" id="error-msg">
                  <u1>
                      @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </u1>
                  <div class="alert alert-danger" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                      </svg>
                      &ensp;<strong>So please insert again correctly !!!</strong>
                  </div>
                </div>
          <br/>
              <script>
                setTimeout(function() {
                    $('#error-msg').fadeOut('fast');
                }, 2000); // Delay the fade out by 1.5 seconds
              </script>
          @endif
<form class="main" method="post" action="{{ route ('storebook') }}" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
 @csrf
        <div ><h3>Add Booking</h3></div>
        <hr>
        <label for="auditorium_selection">Auditorium Type : </label> <br>
          <select name="auditorium" class="form-select" >
            <option  selected aria-label="Disabled select example" disabled >Select the menu</option>
            @foreach($auditoriums as $auditorium)
                <option value="{{$auditorium->id}}">{{$auditorium->nameAudi}}</option>
            @endforeach
          </select>
          <br>
          
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" placeholder="Name of the event" name="nameEvent" /> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" placeholder="Details" name="detail_event"/> <br>                                                       
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
          <select name="booking_time[]" class="form-select" multiple aria-label="multiple select example">
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
      <label  for="catering"> Will be Catering : </label> <br>
      <input type="radio"  id="sample" value='Yes' name="catering">Yes
      <input type="radio"  id="sample" value='No' name="catering">No <br>

      <label for="AC_Type">AC type: </label><br>
      <input type="radio" id="sample" value='AC' name="ac">AC
      <input type="radio" id="sample" value='NON AC' name="ac">NON AC
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
    
      <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Specific Needs</div> <br>
      <input type="text" placeholder="needs" name="needs"/> <br> 
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
      <input type="hidden" name="payment" value="">
      <input type="hidden" name="cost" value="">
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

 