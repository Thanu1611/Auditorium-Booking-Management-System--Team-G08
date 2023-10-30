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
  <div class="main">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('css/Auth/verification.js') }}" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="login">
      <form action="{{ url('login') }}" method="post">
        @csrf
        <!-- Authentication Error -->
        @if($message = Session::get('error-login'))
        <div class='error'>
          <strong> {{$message}} </strong>
        </div>
        @endif
        @if($message = Session::get('success-login'))
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
      <form action="{{ url('register') }}" method="post">
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
        <div style="display: flex">
          <input type="text" name="firstname" placeholder="First Name" oninput="capitalizeNames(this)"  required>
          <input type="text" name="lastname" placeholder="Last Name" oninput="capitalizeNames(this)" required>
        </div>
        <div style="display: flex">
          <input type="email" name="email" oninput="validateEmail(this)" placeholder="Email" required>
          <input type="text" name="mobile" placeholder="Mobile Number" oninput="validatePhoneNumber(this)"  required>
        </div>
        <div style="display: flex">
          <input type="text" name="address" placeholder="Address" oninput="capitalizeNames(this)" required>
          <input type="password" name="password" placeholder="Password" required>
        </div>
          <select id="role" name="role"  class="custom-select" onchange="toggleUserFields(this.value)">
            <option disabled selected>User Type:</option>
            <option value="internal">University Staff</option>
            <option value="external">Guest</option>
          </select>
        <div id="internal-fields" style="display: none;">
          <div style="display: flex">
            <input type="text" name="faculty" oninput="capitalizeNames(this)" placeholder="Faculty">
            <input type="text" name="department" oninput="capitalizeNames(this)" placeholder="Department">
          </div>
            <input type="text" name="designation" oninput="capitalizeNames(this)" placeholder="Designation">
        </div>
        <div id="external-fields" style="display: none;">
          <div style="display: flex">
            <input type="text" name="nic"oninput="validateNIC(this)" placeholder="NIC">
            <input type="text" name="organization"oninput="capitalizeNames(this)"  placeholder="Organization">
          </div>
          <div style="display: flex">
            <input type="text" name="external-address" oninput="capitalizeNames(this)" placeholder="Organization Address">
            <input type="text" name="purpose"oninput="capitalizeNames(this)"  placeholder="Purpose">
          </div>
          <input type="hidden" name="role" value="Admin">
          <input type="hidden" id="image" name="image" value="Profile/local.png">
        </div>
        <button>Sign up</button>
      </form>
    </div>
    
  </div>
</body>

</html>