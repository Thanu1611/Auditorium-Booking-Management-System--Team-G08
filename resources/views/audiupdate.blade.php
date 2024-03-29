@extends('Layouts.role',['auditorium' => $auditorium])
@section('content')
<form class="main" method="post" action="{{ route ('updateaudi',['id' => $auditorium->id]) }}" enctype="multipart/form-data" style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
    @csrf
    @method('PUT')
    <div style="position:fixed;width:70%;margin-top:20px" >
          @if ($errors->any())
              <div class="alert alert-danger" id="error-msg">
                  <u1>
                      @foreach ($errors->all() as $error)
                      <li>{{$error}}</li>
                      @endforeach
                  </u1>
                  <div class="alert alert-danger" role="alert">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                      </svg>
                      &ensp;<strong>So please insert again correctly !!!</strong>
                  </div>
                </div>
          <br/>
              <script>
                setTimeout(function() {
                    $('#error-msg').fadeOut('fast');
                }, 2000); // Delay the fade out by 1.5 seconds
              </script>
          @endif
</div>
     <div ><h3>Update Auditorium Detail</h3></div>
        <hr>
          <label for="grid-first-name">Name of the Auditorium: </label><br>
            <input type="text" name="nameAudi" id="input" value="{{ $auditorium->nameAudi }}" /> <br>
          <label for="grid-last-name">Capacity of the Auditorium:</label><br>
            <input type="number" name="capacity" value="{{ $auditorium->capacity }}" /> <br>     
          <label for="grid-last-name">Description about Auditorium:</label><br>
            <input type="text" name="description" value="{{ $auditorium->description }}"/> <br> 
            <label for="images">Choose Auditorium images (leave empty to keep existing, or select new ones):</label>
            <br>
            <input type="file" id="images" name="images[]" multiple>
            <br>
            
            <!-- Display existing images for deletion -->
            <label>Delete Existing Images:</label><br>
            @foreach (explode(',', $auditorium->images) as $imagePath)
                <div>
                    <img src="{{ url($imagePath) }}" style="height: 100px; width: 150px;">
                    <input type="checkbox" id="sample" name="delete_images[]" value="{{ $imagePath }}"> Delete
                </div>
                <br>
            @endforeach
            <br>
            <input type="hidden" name="admin" value="{{$auditorium->admin}}">
            <button class="button" type="submit" >Update the Details</button>     
            <div class="col-12" style="padding:5px">
            <a role="button" href="{{route('home',['auditoriumId' =>$auditorium->id])}}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
            </div>  
        </div>
                                                
</form>
@endsection