<!DOCTYPE html>
<html>
  <head>
    <title>ABMS</title>

    <link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />  
    <link href="{{ asset('css/Auth/Login.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

  </head>
 
<body>
  <div class="layoutmain" style="display:flex; position:fixed; top:0; width:100%"> 
      <div class="col-md-6" style="display:flex">
          <img src="/images/audi2.png" style="width:60px; height:60px" alt="hos_logo">
          <h3  style="padding:10px; color:#302b63; font-weight:bold; margin-top:1%">Auditorium Booking Management System</h3>
      </div>
      <div class="col-md-6" style="margin-left:10%; margin-right:1%">
        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small" style="margin-left: 600px; ">
        <li>
        <div style="margin-left: 100px; " >
        <a href="{{ route('welcome') }}" class="nav-link text-black">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24">
                <path d="M12 2.0996094 L1 12 L4 12 L4 21 L11 21 L11 15 L13 15 L13 21 L20 21 L20 12 L23 12 L12 2.0996094 z M12 4.7910156 L18 10.191406 L18 11 L18 19 L15 19 L15 13 L9 13 L9 19 L6 19 L6 10.191406 L12 4.7910156 z"></path>
            </svg>
            <span class="nav-text">Home</span>
        </a>
        </div>
      </li>
      </ul>
</div>
      
  </div>
    <div class="main">
      <input type="checkbox" id="chk" aria-hidden="true">
      <div class="login">
        <form action="{{ url('login') }}" method="post">
          @csrf
          <!-- Authentication Error -->
          @if ($message = Session::get('error-login'))
          <script>
            Swal.fire({
              icon: 'error',
              title: 'Authentication Error',
              text: '{{ $message }}',
            });
          </script>
          @endif

          @if ($message = Session::get('success-login'))
          <script>
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: '{{ $message }}',
            });
          </script>
          @endif

          <!-- Validation Error -->
          @if ($errors->any())
          <script>
            var errorMessage = '<ul>';
            @foreach ($errors->all() as $error)
              errorMessage += '<li>{{ $error }}</li>';
            @endforeach
            errorMessage += '</ul>';

            Swal.fire({
              icon: 'error',
              title: 'Validation Error',
              html: errorMessage,
            });
          </script>
          @endif

          <label for="chk" aria-hidden="true">Login</label>
          <br>
          <div class="col-md-12" style="padding:5px; text-align:center" id="username">
              <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email">
          </div><br>
          <div class="col-md-12" style="padding:5px; text-align:center" id="password">
              <div class="input-group" id="passwordToggle">
                  <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
                  <span class="input-group-text" id="togglePassword">
                      <i class="fa fa-eye-slash"></i>
                  </span>
              </div>
              <a href="{{route('forgotpassword')}}" style="color:white;margin-left:90px"> Forgot Password </a>
          </div>
          
          <br>
          <button>Login</button>
          </form>

    </div>
    <div class="signup">
      <form action="{{ route ('storead') }}"  method="post">
        @csrf
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
        <div class="col-md-6" id="passwordToggleSignUp">
          <input type="text" name="address" placeholder="Address" oninput="capitalizeNames(this)" required>
          <input type="password" class="form-control" id="floatingPasswordSignUp" name="password" placeholder="Password" required>
            <span class="input-group-text" id="togglePasswordSignUp">
              <i class="fa fa-eye-slash"></i>
            </span>
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
          <input type="hidden" name="role" value="customer">
          <input type="hidden" name="image" value="Profile/local.png">
        </div>
          </div>
        <button>Sign up</button>
      </form>
    </div>
    
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('css/Auth/verification.js') }}" type="text/javascript"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</body>
<script>
        function toggleUserFields(userType) {
            const internalFields = document.getElementById("internal-fields");
            const externalFields = document.getElementById("external-fields");

            if (userType === "internal") {
                internalFields.style.display = "block";
                externalFields.style.display = "none";
                clearExternalFields();
            } else if (userType === "external") {
                internalFields.style.display = "none";
                externalFields.style.display = "block";
                clearInternalFields();
            }
        }

        function clearInternalFields() {
            document.getElementsByName("faculty")[0].value = "";
            document.getElementsByName("department")[0].value = "";
            document.getElementsByName("designation")[0].value = "";
        }

        function clearExternalFields() {
            document.getElementsByName("organization")[0].value = "";
            document.getElementsByName("external-address")[0].value = "";
            document.getElementsByName("purpose")[0].value = "";
        }
 
    </script>
</html>