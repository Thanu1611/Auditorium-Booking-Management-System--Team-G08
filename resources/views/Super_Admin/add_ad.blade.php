@extends('Layouts.role')
@section('content')

<form class="main" method="post" action="{{ route ('storead') }}"  style="width:850px; height:100%; margin-top:90px; padding:20px; margin-left:auto; margin-right:auto;">
    @csrf
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
<div class="row g-3">
        <div class="fw-semibold">
            <h3>Add Admin</h3>
        </div>
        <hr>
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px" for="grid-first-name">First Name : </label>
            <input type="text" name="firstname" oninput="capitalizeNames(this)" required>
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px" for="grid-first-name">Last Name : </label>
            <input type="text" name="lastname" oninput="capitalizeNames(this)" required>
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px" for="grid-first-name">Email : </label>
            <input type="email" name="email" oninput="validateEmail(this)" required>
        </div>
<span id="email-validation-message" style="color: purple;margin-left:220px"></span> <!-- Move the email validation span here -->
        <div class="col-md-12" style="display: flex"  id="password">
            <label style="width:100px;height:30px" for="grid-first-name">Password : </label>
            <div class="input-group mb-3" >
            <input type="password" id="floatingPassword" style="cursor:pointer;" name="password" placeholder="" required>
            <span class="input-group-text" id="togglePassword">
            <i class="fa fa-eye-slash"></i> </span>
            </div>
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px;" for="grid-first-name">Address : </label>
            <input type="text" name="address" placeholder="" oninput="capitalizeNames(this)" required>
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px" for="grid-first-name">Mobile  : </label>
            <input type="text" name="mobile" placeholder="" oninput="validatePhoneNumber(this)" required>
        </div>
        <span id="phone-error-msg" style=" display:none;color: purple;margin-left:220px;">Invalid phone number format</span> <!-- Move the phone number error span here -->
        <div class="col-md-12" style="display: flex">
            <label style="width:100px;height:30px" for="grid-first-name">Faculty : </label>
            <input type="text" name="faculty" placeholder="" oninput="capitalizeNames(this)">
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:110px;height:30px" for="grid-first-name">Department : </label>
            <input type="text" name="department" placeholder="" oninput="capitalizeNames(this)">
        </div>
        <div class="col-md-12" style="display: flex">
            <label style="width:110px;height:30px" for="grid-first-name">Designation : </label>
            <input type="text" name="designation" placeholder="" oninput="capitalizeNames(this)">
        </div>
        <br>
        <input type="hidden" name="role" value="Admin">
        <input type="hidden" name="usertype" value="internal">
        <input type="hidden" name="nic" value="">
        <input type="hidden" name="organization" value="">
        <input type="hidden" name="external_address" value="">
        <input type="hidden" name="purpose" value="">
        <input type="hidden" id="image" name="image" value="Profile/local.png">
        <button class="button" type="submit">Store the Details</button>
        <div class="col-12" style="padding:5px">
            <a role="button" href="{{ route('superadmin') }}" class="btn btn-primary" style="font-weight:bold; color:white; background-color:#573b8a;width: 15%;height: 40px;"> << Previous </a>
        </div>

</div>                                    
</form>
<script>
    const togglePasswordButton = document.querySelector('#togglePassword');
const passwordInput = document.querySelector('#floatingPassword');

togglePasswordButton.addEventListener('click', function () {
  const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
  passwordInput.setAttribute('type', type);
  this.querySelector('i').classList.toggle('fa-eye');
  this.querySelector('i').classList.toggle('fa-eye-slash');
});
    </script>

@endsection