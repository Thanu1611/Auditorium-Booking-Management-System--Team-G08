@extends('Layouts.role')
@section('content')

<div style=" width:1050px; height:600px; margin-top:0%;margin-right:0%; padding:0%">
<a role="button" href="{{route('tableadd')}}"class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 15%;height: 40px;"> + Add  </a>
<br>
<br>
<table class="table table-hover table-container">

    <thead>
        <tr>
            <th >No</th>
            <th >Facility</th>
            <th >Charge</th>
            <th  >Actions</th>
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
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 20%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 20%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 20%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 20%;height: 40px;" href="#" >Edit</a></td>

    </tr>
    <tr class="hover-row" hover="color:white">
        <td >#</td>
        <td >#</td>
        <td >#</td>
        <td><a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 20%;height: 40px;" href="#" >Edit</a></td>

    </tr>

       
</table>
<br>
<a role="button" href="{{route('home')}}"class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 15%;height: 40px;"> << Previous </a>
</div>
@endsection