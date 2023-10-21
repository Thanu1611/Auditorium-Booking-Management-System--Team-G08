@extends('Layouts.role')
@section('content')
<form class="main" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
        <div ><h3>Add Facility</h3></div>
        <hr>
          <label for="grid-first-name">Name of the Facility : </label><br>
            <input type="text" id="input"/> <br>
          <label for="grid-last-name">Details of the Facility:</label><br>
            <input type="text" /> <br>     
          <label for="grid-last-name">Charge of the Facility:</label><br>
            <input type="number" /> <br>  
            <button type="submit" class="button" >Store</button>     
            <div class="col-12" style="padding:5px">
  <a role="button" href="{{route('table')}}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
  </div>                                            
</form>

@endsection

 