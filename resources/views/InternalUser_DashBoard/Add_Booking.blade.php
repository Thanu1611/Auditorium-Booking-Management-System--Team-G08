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
<style>
    .disabled-date {
        background-color: #f2f2f2;
        color: #999999;
    }
</style>
<form class="main" method="post" action="{{ route ('storebook') }}" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
 @csrf
        <div ><h3>Add Booking</h3></div>
        <hr>
        <label for="auditorium_selection">Auditorium Type : </label> <br>
          <select id="auditorium" name="auditorium" class="form-select" >
            <option  selected aria-label="Disabled select example" disabled >Select the menu</option>
            @foreach($auditoriums as $auditorium)
                <option id ='auditorium' value="{{$auditorium->id}}">{{$auditorium->nameAudi}}</option>
            @endforeach
          </select>
          <br>

          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" placeholder="Name of the event" name="nameEvent" /> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" placeholder="Details" name="detail_event"/> <br>                                                       
          <label for="booking_date">Booking Date : </label> <br>
            <input type="date"  id="booking_date" name="booking_date"> <br>
        <br>
        <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Time</div> <br>
        <label for="start_time">Start Time (24-Hour Format):</label> <br>
        <input type="text" id="start_time" name="start_time" pattern="([01][0-9]|2[0-3]):[0-5][0-9]" placeholder="HH:MM" required> <br>

        <label for="end_time">End Time (24-Hour Format):</label> <br>
        <input type="text" id="end_time" name="end_time" pattern="([01][0-9]|2[0-3]):[0-5][0-9]" placeholder="HH:MM" required> <br>

        <span id="time-validation-message" style="color: purple;"></span>
          <br>
          <br>

          

    <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Type</div> <br>
    <div id="facilities-checkboxes"></div>
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
      <br>
      <br>
      <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Cost </div> <br>
      <input type="number" name="cost" value='10000' readonly id="cost" /> <br>
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
      <input type="hidden" name="payment" value="">
    <button type="submit" class="button" >Booking</button>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<script>
    const takenDates = @json($takenDates);

    const dateInput = document.getElementById('booking_date');
    const today = new Date().toISOString().split('T')[0];
    dateInput.min = today;

    dateInput.addEventListener('input', () => {
        const selectedDate = dateInput.value;
        if (selectedDate && (selectedDate < today || takenDates.includes(selectedDate))) {
            dateInput.setCustomValidity('Please select a valid and available date.');
            dateInput.classList.add('disabled-date'); // Add the CSS class
        } else {
            dateInput.setCustomValidity('');
            dateInput.classList.remove('disabled-date'); // Remove the CSS class
        }
    });
    document.getElementById('start_time').addEventListener('change', validateTime);
    document.getElementById('end_time').addEventListener('change', validateTime);

    function validateTime() {
        const startTimeInput = document.getElementById('start_time');
        const endTimeInput = document.getElementById('end_time');
        const validationMessage = document.getElementById('time-validation-message');

        if (startTimeInput.validity.valid && endTimeInput.validity.valid) {
            const startTime = new Date(`2000-01-01T${startTimeInput.value}`);
            const endTime = new Date(`2000-01-01T${endTimeInput.value}`);

            const minTime = new Date(`2000-01-01T08:00`);
            const maxTime = new Date(`2000-01-01T17:00`);

            if (startTime >= minTime && endTime <= maxTime && startTime < endTime) {
                validationMessage.textContent = '';
            } else {
                validationMessage.textContent = 'Start Time and End Time must be between 08:00 and 17:00, and Start Time must be earlier than End Time.';
                startTimeInput.value = '';
                endTimeInput.value = '';
            }
        }
    }


    
</script>

<script>
            $(document).ready(function () {
        $('#auditorium').on('change', fetchFacilities);
        $('#start_time, #end_time').change(calculateCost);

        // Fetch facilities for the selected auditorium
        fetchFacilities();

        // Function to fetch facilities based on the selected auditorium
        function fetchFacilities() {
            const selectedAuditorium = $('#auditorium').val();
            $.ajax({
                url: '{{ route("getFacilitiesForAuditorium") }}',
                type: 'GET',
                data: { auditorium: selectedAuditorium },
                success: function (data) {
                    $('#facilities-checkboxes').empty();
                    data.forEach(function (facility) {
                        if (facility.nameFacility !== 'Hour_Payment') {
                            $('#facilities-checkboxes').append(
                                '<div class="form-check">' +
                                '<input class="form-check-input" type="checkbox" name="facilities[]" value="' + facility.id + '" id="facility-' + facility.id + '">' +
                                '<label class="form-check-label" for="facility-' + facility.id + '">' +
                                facility.nameFacility +
                                '</label>' +
                                '</div>'
                            );
                            $(`#facility-${facility.id}`).change(calculateCost);
                        }
                    });
                    // Calculate the cost initially
                    calculateCost();
                },
            });
        }

        // Function to calculate and update the cost
        // Function to calculate and update the cost
function calculateCost() {
    var selectedFacilityIds = $('input[name="facilities[]"]:checked').map(function () {
        return $(this).val();
    }).get();

    $.ajax({
        url: '{{ route("calculateCost") }}',
        type: 'GET',
        data: {
            facilities: selectedFacilityIds,
            auditorium: $('#auditorium').val(),
            start_time: $('#start_time').val(),
            end_time: $('#end_time').val()
        },
        success: function (data) {
            $('#cost').val(data.cost);
        },
    });
}

    });
    </script>





@endsection

 