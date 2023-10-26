@extends('Layouts.userRole')
@section('content')
<div style=" width:1050px; height:600px; padding:0%">

<table class="table table-hover table-container">

    <thead>
        <tr>
            <th >Event_No</th>
            <th >Date</th>
            <th >Time</th>
            <th  colspan=3>Status</th>
        </tr>
    </thead>
        <script>
            var tableHead = document.querySelector('thead');
            var tableBody = document.querySelector('tbody');
            tableBody.style.marginTop = tableHead.offsetHeight + 'px';
        </script>   
    
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 40%;height: 40px;" href="#" >View</a></td>  <!--if approval ,disapproval we can make in view sheet-->
    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 40%;height: 40px;" href="#" >Check Payment</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 40%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 40%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 40%;height: 40px;" href="#" >Edit</a></td>

    </tr>


       
</table>
</div>

@endsection