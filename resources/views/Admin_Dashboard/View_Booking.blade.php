@extends('Layouts.role')
@section('content')
<div >
  <table class="table table-hover" style="background: #eee;width:500px; height:100px; margin-top:10%; padding:2px; transform: translateY(-180px)" >
    <thead>
        <tr>
            <th >No</th>
            <th >Full Name</th>
            <th >Address</th>
            <th >BHT</th>
            <th >Blood Group</th>
            <th >Age</th>
            <th >Phone No</th>
            <th >Action</th>
        </tr>
    </thead>
        <script>
            var tableHead = document.querySelector('thead');
            var tableBody = document.querySelector('tbody');
            tableBody.style.marginTop = tableHead.offsetHeight + 'px';
        </script>

    @php($i=0)
    
    <tr class="hover-row">
        <td >{{++$i}}</td>
        <td >data</td>
        <td >data</td>
        <td >data</td>
        <td >data</td>
        <td >data</td>
        <td >data</td>
        <td ><a role="button" class="btn btn-info" style="font-weight:bold; color:white; background-color:#1980c1; margin-bottom:5px" href="#"></a>
            <a role="button" class="btn btn-info" style="font-weight:bold; color:white; background-color:#1980c1; margin-bottom:5px" href="#"> </a>
        </td>
    </tr>

        
</table>
</div>

@endsection