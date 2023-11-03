@extends('Layouts.role')
@section('content')

<div class="main"  style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
   
     <div ><h3>Auditorium</h3></div>
        <hr>
          <label for="grid-first-name">Name of the Auditorium: </label><br>
             <input type="text" class="form-control" value="{{ $auditorium->nameAudi }}" readonly><br>
          <label for="grid-last-name">Capacity of the Auditorium:</label><br>
             <input type="text" class="form-control" value="{{ $auditorium->capacity }}" readonly><br>   
          <label for="grid-last-name">Description about Auditorium:</label><br>
             <input type="text" class="form-control" value="{{ $auditorium->description }}" readonly><br>
             <label for="grid-last-name">Cost of the Auditorium:</label><br>
             <input type="text" class="form-control" value="{{ $auditorium->cost }}" readonly><br>
         <label for="grid-last-name">Admin:</label><br>
             <input type="text" class="form-control" value="{{ $user->firstname }} {{ $user->lastname }}" readonly><br>
          <label for="images">Auditorium images:</label>
          <br>
            @foreach(explode(',', $auditorium->images) as $imagePath)
                <img src="{{ url($imagePath) }}" style="height: 100px; width: 150px;">&emsp;&emsp;
            @endforeach   
            <div class="col-12" style="padding:5px">
             <a role="button" href="{{ route('superadmina') }}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
            </div>  
        </div>
                                            
</form>

@endsection