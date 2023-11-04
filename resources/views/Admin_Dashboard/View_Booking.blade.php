@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')
<div style=" width:1050px; height:600px; padding:0%">

<table class="table table-hover table-container">

<thead>
        <tr>
            <th >Event_No</th>
            <th>Event_Name</th>
            <th >Date</th>
            <th >Time</th>
            <th>Customer</th>
            <th  colspan=3>Status</th>
        </tr>
    </thead>
        <script>
            var tableHead = document.querySelector('thead');
            var tableBody = document.querySelector('tbody');
            tableBody.style.marginTop = tableHead.offsetHeight + 'px';
        </script>   
    @foreach($events as $event)
    @php
        $cust = $user->where('id', $event->user)->first();
    @endphp
    <tr class="hover-row" hover="color:white">
        <td>{{ ++$loop->index }}</td>
        <td >{{$event->nameEvent}}</td>
        <td >{{$event->booking_date}}</td>
        <td >{{$event->booking_time}}</td>
        <td >{{ $cust ? $cust->firstname : 'N/A' }}</td>
        <div class="row g-3">
        @if($event->approval_status=='none')
		<div class="col-md-4">
			<td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="#" >View</a></td>
			<td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="{{route('AppStatus',['eventId' => $event->id])}}" >Approval</a></td>
            <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="{{route('disAppStatus',['eventId' => $event->id])}}" > Disapproval</a></td>
		</div>			
        @elseif($event->approval_status=='approved' && $event->payment_status=='none')
		<div class="col-md-6">
			<td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="#" >View</a></td>
            <td colspan=2>Waiting for payment</td>
		</div>	
		@elseif($event->approval_status=='approved' && $event->payment_status=='paid')
		<div class="col-md-6">
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="#" >View</a></td>
			<td colspan=2><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="{{route('checkpay',['eventId' => $event->id])}}" >Check Payment</a></td>
        </div>	
        @elseif($event->approval_status=='approved' && $event->payment_status=='done')
		<div class="col-md-6">
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="#" >View</a></td>
			<td colspan=2>Auditorium Booked</td>
        </div>	
		@elseif($event->approval_status=='disapproved')
            <td colspan=3>Cancelled By You</td>
        @elseif($event->approval_status=='cancel')
	        <td colspan=3>Cancelled By Customer</td>
        @endif
</div> 
    </tr>     
    @endforeach
</table>
</div>

@endsection