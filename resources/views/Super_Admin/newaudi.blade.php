@extends('Layouts.role')
@section('content')
<div class="main" style="display:flex; flex-direction:row;width:1050px; height:600px; margin-top:80px; padding:10px">
<form method="post" action="#">
    @csrf
<h3>Auditorium Details</h3>
        <div class="container2">
            <label>Name of the Auditorium : </label> <input type="text"  value="#"> 
          </div>
          <div class="container2">
          <label>Description :  </label>
    
            <textarea class="textarea"> </textarea>

          </div>
          <div class="container2">
          <label for="images">Choose multiple images:</label>
            <input type="file" id="images" name="images[]" multiple>
            <br>
          </div>

          <div class="col-12" style="padding:5px">
        <button type="submit" class="button" style="font-weight:bold; margin-left:77%">Add</button>
        <br>
        <br>
        <br>
        <a role="button" href="{{route('front')}}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
    </div>


    </form>
</div>