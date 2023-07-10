@extends('Layouts.role')
@section('content')
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="calendar3" viewBox="0 0 32 32">
    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
    <path d="M6.5 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm-9 3a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm3 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
  </symbol>
</svg>
<div class="main" style="display:flex; flex-direction:row;width:1050px; height:600px; margin-top:80px; padding:10px">
        <h1 >Dashboard</h1>
        <div>

          <button type="button" class="btn  btn-outline-secondary dropdown-toggle align-items-center">
            <svg><use xlink:href="#calendar3"/></svg>
            This week
          </button>
    
      </div>

      <a type="button" href="{{route('home')}}" class="button" style="font-weight:bold; margin-right:88%">    << Previous </a>

  

</div>
@endsection