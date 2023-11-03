@extends('Layouts.role')
@section('content')
@if ($message = Session::get('success'))
        <div id="success-msg" class="alert alert-success">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cloud-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg>&ensp;<strong>{{$message}}</strong>
            </p>
        </div>
        <script>
            setTimeout(function() {
                $('#success-msg').fadeOut('fast');
            }, 1500); // Delay the fade out by 3 seconds
        </script>
@endif
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