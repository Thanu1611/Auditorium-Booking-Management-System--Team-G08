@extends('Home.new')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
@if ($message = Session::get('success'))
        <div id="success-msg" class="alert alert-success">
            <p>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-cloud-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg>&ensp;<strong>{{$message}}</strong>
            </p>
        </div>
        <script>
            setTimeout(function() {
                $('#success-msg').fadeOut('fast');
            }, 1500); // Delay the fade out by 3 seconds
        </script>
@endif
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
                      &ensp;<strong>Confirm password does not match. Please check again. !!!</strong>
                  </div>
                </div>
          <br/>
              <script>
                setTimeout(function() {
                    $('#error-msg').fadeOut('fast');
                }, 2000); // Delay the fade out by 1.5 seconds
              </script>
          @endif
@if ($message = Session::get('error'))
        <div class="alert alert-danger" id="error-msg">
            <p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
                        <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
                        <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995z"/>
                      </svg>&ensp;<strong>{{$message}}</strong>
            </p>
        </div>
        <script>
            setTimeout(function() {
                $('#success-msg').fadeOut('fast');
            }, 1500); // Delay the fade out by 3 seconds
        </script>
@endif


<div class="main" style="display: flex; flex-direction: row; flex-wrap: wrap; width: 350px; margin-top: 200px; padding: 10px;">
    <p id="message_error" style="color: red;"></p>
    <p id="message_success" style="color: green;"></p>
    <form  method="POST" action="{{route('resetpasswordlord')}}" >
    @csrf
        <h4 align=center>Reset Password</h4>
         
         <center>
         <input type="hidden" name="id" value="{{ $user[0]['id']}}">
        <input type="password" name="password" placeholder="Enter Password"> <br><br>
        <input type="password" name="password_confirmation" placeholder="Enter confirm Password"> <br><br>
        <input type="submit" value="Reset Password">
            </center>
    </form>

@endsection