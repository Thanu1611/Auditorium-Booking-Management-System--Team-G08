@extends('Layouts.role')
@section('content')

<div class="main"  style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
   

        <center>  <img src="{{ url($admin->image) }}" style="height: 150px; width: 150px;"></center><br><br>
          <label for="grid-first-name">Name : </label><br>
             <input type="text" class="form-control" value="{{ $admin->firstname }} {{ $admin->lastname }}" readonly><br>
          <label for="grid-last-name">Email :</label><br>
             <input type="text" class="form-control" value="{{ $admin->email }}" readonly><br>   
             <label for="grid-last-name">Address  :</label><br>
             <input type="text" class="form-control" value="{{ $admin->address }}" readonly><br> 
             <label for="grid-last-name">Mobile  :</label><br>
             <input type="text" class="form-control" value="{{ $admin->mobile }}" readonly><br>             
             <label for="grid-last-name">Designation   :</label><br>
             <input type="text" class="form-control" value="{{ $admin->designation  }}" readonly><br>           
             <div class="col-12" style="padding:5px">  
            

             <a role="button" href="{{ route('superadmin') }}"class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
            </div>  
        </div>
                                            
</form>

@endsection