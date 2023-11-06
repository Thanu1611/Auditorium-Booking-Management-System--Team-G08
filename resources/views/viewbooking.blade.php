@extends('Layouts.role',['user' => $user],['auditorium' => $auditorium])
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
        <div ><h3>View Booking Detail</h3></div>
        <hr>
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input" value="{{$event->nameEvent}}" read only/> <br>
          <label for="grid-last-name">Details of the event:</label><br>
            <input type="text" value="{{$event->detail_event}}" read only/> <br>                                                       
          <label for="booking_date">Booking Date : </label> <br>
            <input type="text"  id="booking_date" name="booking_date" value="{{$event->booking_date}}" read only> <br>
        <br>
        <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Booking Time</div> <br>
        <label for="start_time">Start Time (24-Hour Format):</label> <br>
        <input type="text" id="start_time" name="start_time" value="{{$event->start_time}}" read only> <br>

        <label for="end_time">End Time (24-Hour Format):</label> <br>
        <input type="text" id="end_time" name="end_time" value="{{$event->end_time}}" read only> <br>
    <div id="facilities-checkboxes"></div>
      <input type="hidden" name="approval_status" value="none">
      <input type="hidden" name="payment_status" value="none">
      <br>
      <br>
      <div class="p-2 bg-secondary  bg-opacity-10 border  border-start-0 rounded-end " style="font-weight:bold;background-color:#f8f9fa"> Cost </div> <br>
      <input type="number" name="cost" value='10000' readonly  /> <br>
</div>
</form>

@endsection