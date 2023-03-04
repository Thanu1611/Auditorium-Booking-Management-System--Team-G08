<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>

<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">

<link href="{{ asset('css/Auth/Login.css') }}" rel="stylesheet">
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
			<div class="login">
				<form>
					<label for="chk" aria-hidden="true">Login</label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
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
					<button>Sign up</button>
				</form>
			</div>
	</div>
</body>
</html>