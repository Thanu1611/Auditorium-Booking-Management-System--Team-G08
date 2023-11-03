
<!DOCTYPE html>
<html>
<head>
<title>ABMS</title>

<link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  
<link href="{{ asset('css/Auth/Login.css') }}" rel="stylesheet">
</head>
<body>
<div class="layoutmain" style="display:flex; position:fixed; top:0; width:100%"> 
    <div class="col-md-6" style="display:flex">
        <img src="/images/audi2.png" style="width:60px; height:60px" alt="hos_logo">
        <h2  style="padding:10px; color:#302b63; font-weight:bold; margin-top:1%">Auditorium Booking Management System</h2>
</div> 
</div>
  <div class="main">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('css/Auth/verification.js') }}" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="login">
      <form action="{{ url('login') }}" method="post">
        @csrf
        @if ($message = Session::get('success-login'))
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
      @if($message = Session::get('error-login'))
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
                            &ensp;<strong>{{$message}}</strong>
                        </div>
                      </div>
                <br/>
                    <script>
                      setTimeout(function() {
                          $('#error-msg').fadeOut('fast');
                      }, 2000); // Delay the fade out by 1.5 seconds
                    </script>
        @endif
        <label for="chk" aria-hidden="true">Login</label>
        <br>
        <div class="col-md-12" style="padding:5px; text-align:center" id="username">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email">
        </div><br>
        <div class="col-md-12" style="padding:5px; text-align:center" id="password">
            <div class="input-group">
                <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                <span class="input-group-text" id="togglePassword">
                    <i class="fa fa-eye-slash"></i>
                </span>
            </div>
        </div>
        <br>
        <button>Login</button>
        </form>

    </div>
    <div class="signup">
      <form action="{{ route ('storead') }}"  method="post">
        @csrf
        <!-- Authentication Error -->
        @if($message = Session::get('error-signup'))
        <div class='error'>
          <strong> {{$message}} </strong>
        </div>
        @endif
        @if($message = Session::get('success-signup'))
        <div class="success">
          <strong> {{$message}} </strong>
        </div>
        @endif
        <!-- Validation Error -->
        @if ($errors->any())
        <div class='error'>
          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <label for="chk" aria-hidden="true">Sign up</label>
  <div class="row g-3">
        <div class="col-md-6" style="display: flex">
          <input type="text" name="firstname" placeholder="First Name" oninput="capitalizeNames(this)"  required>
          <input type="text" name="lastname" placeholder="Last Name" oninput="capitalizeNames(this)" required>
        </div>
        <div class="col-md-6"  style="display: flex">
          <input type="email" name="email" oninput="validateEmail(this)" placeholder="Email" required>
          <input type="text" name="mobile" placeholder="Mobile Number" oninput="validatePhoneNumber(this)"  required>
        </div>
        <span id="email-error-msg" class="error-message"></span>
        <span id="phone-error-msg" class="error-message"></span>
        <div class="col-md-6" style="display: flex">
          <input type="text" name="address" placeholder="Address" oninput="capitalizeNames(this)" required>
          <input type="password" name="password" placeholder="Password" required>
        </div>
        <div class="col-md-12" style="display: flex">
          <select id="role" name="usertype"  class="custom-select" onchange="toggleUserFields(this.value)">
            <option disabled selected>User Type:</option>
            <option value="internal">University Staff</option>
            <option value="external">Guest</option>
          </select>
        </div>
        <div id="internal-fields" style="display: none;">
          <div class="col-md-6" style="display: flex">
            <input type="text" name="faculty" oninput="capitalizeNames(this)" placeholder="Faculty">
            <input type="text" name="department" oninput="capitalizeNames(this)" placeholder="Department">
          </div>
          <div class="col-md-6" style="display: flex">
            <input type="text" name="designation" oninput="capitalizeNames(this)" placeholder="Designation">
          </div>
        </div>
        <div id="external-fields" style="display: none;">
          <div class="col-md-6"style="display: flex">
            <input type="text" name="nic"oninput="validateNIC(this)" placeholder="NIC">
            <input type="text" name="organization"oninput="capitalizeNames(this)"  placeholder="Organization">
          </div>
          <div class="col-md-6" style="display: flex">
            <input type="text" name="external_address" oninput="capitalizeNames(this)" placeholder="Organization Address">
            <input type="text" name="purpose"oninput="capitalizeNames(this)"  placeholder="Purpose">
          </div>
          </div>
          <input type="hidden" name="role" value="customer">
          <input type="hidden" name="image" value="Profile/local.png">
        </div>

        <button>Sign up</button>
      </form>
    </div>
    
  </div>
</body>

</html>