@extends('Layouts.role')
@section('content')
<div class="main" style="display:flex; flex-direction:row;width:1050px; height:600px; margin-top:80px; padding:10px">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="table" viewBox="0 0 16 16">
    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
  </symbol>
  <symbol id="collection" viewBox="0 0 16 16">
    <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z"/>
  </symbol>
  <symbol id="graph" viewBox="0 0 16 16">
  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
  <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
  <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
  </symbol>
  <symbol id="speedometer" viewBox="0 0 16 16">
    <path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z"/>
    <path fill-rule="evenodd" d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"/>
  </symbol>
  <symbol id="update" viewBox="0 0 13 13">
  <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
  </symbol>

</svg>
<div class="container px-4 py-5">
    <h3>Library Mini Auditorium</h3>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="col d-flex flex-column align-items-start gap-2">
        <h2 class="fw-bold text-body-emphasis">Update Auditorium Details</h2>
        <p class="text-body-secondary">
          Clicking this button allows you to modify and update the details of the auditorium. 
         <br>
          This feature enables you to visually represent the updated auditorium layout  
          <br>
          Make sure to upload the necessary images and provide accurate information to ensure the auditorium details are up-to-date </p>
        <a  href="{{route('audiupdate')}}" class="btn btn-primary btn-lg" >            
          <div >
              <svg class="bi" width="12em" height="1em">
                <use xlink:href="#update" />
              </svg>
            </div></a>
      </div>

      <div class="col">
        <div class="row row-cols-2 row-cols-sm-2 g-4">
          <div class="col d-flex flex-column gap-2">
          <a role="button" class="btn btn-primary btn-lg" onclick="openPopup()">
            <div >
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#speedometer" />
              </svg>
            </div>
          </a>
          @include('upcomingevent')
            <h4 class="fw-semibold mb-0 text-body-emphasis" >Upcoming Event</h4>
            <p class="text-body-secondary">list of upcoming events scheduled in the auditorium. 
             </p>
          </div>

          <div class="col d-flex flex-column gap-2">
           
            <a  href="{{route('graph')}}" class="btn btn-primary btn-lg" >            
          <div >
              <svg class="bi" width="1em" height="1em">
                <use xlink:href="#graph" />
              </svg>
            </div></a>
           
            <h4 class="fw-semibold mb-0 text-body-emphasis">Booking Status</h4>
            <p class="text-body-secondary">provides an interactive visual representation of the booking rate for the auditorium. </p>
          </div>

           <div class="col d-flex flex-column gap-2">
           
           <a  href="{{route('table')}}" class="btn btn-primary btn-lg" >            
         <div >
             <svg class="bi" width="1em" height="1em">
               <use xlink:href="#table" />
             </svg>
           </div></a>
          
           <h4 class="fw-semibold mb-0 text-body-emphasis">Facility Charges</h4>
           <p class="text-body-secondary">allows users to modify and adjust the charges associated with various facilities. </p>
         </div>
        </div>
      </div>
    </div>
  </div>

@endsection