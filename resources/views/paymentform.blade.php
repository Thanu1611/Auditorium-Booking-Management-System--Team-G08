@extends('Layouts.role',['user' => $user])
@section('content')
<form class="main" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
        <div ><h3>Payment</h3></div>
        <hr>
          <label for="grid-first-name">Name of the event : </label><br>
            <input type="text" id="input"/> <br>
          <label for="grid-last-name">Total of the cost:</label><br>
            <input type="text" /> <br>     
            <label for="images">Choose Bank Deposit Receipt:</label>
            <br>
            <input type="file" id="images" name="payment" >
            <br>
            <button type="submit" class="button" >submit</button>     
            <div class="col-12" style="padding:5px">
  <a role="button" href="#"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
  </div>                                            
</form>

@endsection
