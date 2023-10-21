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
        <button type="submit" class="button" style="font-weight:bold; margin-left:88%"> Update </button>
        <br>
        <br>
        <br>
        <a role="button" href="{{route('home')}}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
    </div>


    </form>
</div>

<!--<div id="popup" class="popup">
    <div class="popup-content">
        <h2>Auditorium Details</h2>
        <p>Are you sure you want to discharge?</p>
        <button class="btn btn-info" style="font-weight:bold" href="" onclick="closePopup(true)">Yes</button>
        <a class="btn btn-info" style="font-weight:bold" onclick="closePopup(false)">No</a>
    </div>
</div>

<script>
    function openPopup() {
        var popup = document.getElementById('popup');
        popup.style.display = 'flex';
    }

    function closePopup(choice) {
        var popup = document.getElementById('popup');
        popup.style.display = 'none';

        if (choice) {
            // Code to execute when "Yes" is clicked
        } else {
            // Code to execute when "No" is clicked
        }
    }
</script> -->
@endsection