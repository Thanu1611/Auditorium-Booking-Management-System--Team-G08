<!DOCTYPE html>
<html>
<head>
<title>ABMS</title>   
<link rel="icon" type="image/x-icon" href="/images/Uoj.jpg">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link href="{{ asset('css/Auth/Login.css') }}" rel="stylesheet">
</head>
<body>
  <div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class="login">
      <form action="{{ url('login') }}" method="post">
        @csrf
        <!-- Authentication Error -->
        @if($message = Session::get('error'))
        <div class='error'>
          <strong> {{$message}} </strong>
        </div>
        @endif
        @if($message = Session::get('success'))
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
        <input type="email" name="email" placeholder="Email" required="">
  
        <br>
        <input type="password" name="password" placeholder="Password" required="">
  
        <br>
        <button>Login</button>
      </form>
    </div>
    <div class="signup">
      <form>
        <label for="chk" aria-hidden="true">Sign up</label>
        <input type="text" name="name" placeholder="User Name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="text" name="mobile" placeholder="Mobile Number" required="">
        <input type="text" name="address" placeholder="Address" required="">
        <input type="password" name="password" placeholder="Password" required="">
          <select id="user-type" name="user-type"  class="custom-select" onchange="toggleUserFields(this.value)">
            <option disabled selected>user type</option>
            <option value="internal">Internal User</option>
            <option value="external">External User</option>
          </select>
        <div id="internal-fields" style="display: none;">
          <input type="text" name="faculty" placeholder="Faculty">
          <input type="text" name="department" placeholder="Department">
          <input type="text" name="designation" placeholder="Designation">
        </div>
        <div id="external-fields" style="display: none;">
          <input type="text" name="organization" placeholder="Organization">
          <input type="text" name="external-address" placeholder="Address">
          <input type="text" name="purpose" placeholder="Purpose">
        </div>
        <button>Sign up</button>
      </form>
    </div>

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
  </div>
</body>

</html>