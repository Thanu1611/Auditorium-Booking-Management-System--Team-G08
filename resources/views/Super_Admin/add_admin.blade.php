@extends('Layouts.role')
@section('content')

<div style=" width:1050px; height:600px; margin-top:0%;margin-right:0%; padding:0%">
<a role="button" href="{{ route( 'addadmin' ) }}"class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 15%;height: 40px;"> + Add Admin  </a>
<br>
<br>
<table class="table table-hover table-container">

    <thead>
        <tr>
            <th >No</th>
            <th >Admin_Name</th>
            <th >mobile</th>
            <th>Email</th>
            <th colspan=2 >Actions</th>
        </tr>
    </thead>
        <script>
            var tableHead = document.querySelector('thead');
            var tableBody = document.querySelector('tbody');
            tableBody.style.marginTop = tableHead.offsetHeight + 'px';
        </script>   
     
    @php($i=0)
    @foreach($admins as $admin)
    <tr class="hover-row" hover="color:white">
        <td >{{++$i}}</td>
        <td >{{$admin->firstname}} {{$admin->lastname}}</td>
        <td >{{$admin->mobile}}</td>
        <td >{{$admin->email}}</td>
        <td><form method='post' action="{{ route('destroy',['id' => $admin->id]) }}">
            @csrf
            @method('Delete')
            <div class="row g-3">
            <div class="col-md-6">
            <a role="button" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;" href="{{ route('viewad',['id' => $admin->id])}}" >View</a>
            </div>
            <div class="col-md-6">
            <button type="submit" class="btn btn-light" style="font-weight:bold; color:white; background-color:#f350a4;width: 100%;height: 40px;">Delete</button></a> </div></div>
        </form></td>
    </tr> 
    @endforeach
</table>
<br>
</div>
@endsection