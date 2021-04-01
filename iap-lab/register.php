<!DOCTYPE html>
<html>
	<head>
		<title>Register</title>
		<link rel="stylesheet" href="registration.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form id="signUp" enctype="multipart/form-data">
			<div class="split right">
				<div class="centered">
					<h1>Create Account</h1>
					<p>
						<input type="text" name="name" placeholder="Full Name" class="txt" required>
					</p>
					<p>
						<input type="email" name="email" placeholder="Email" class="txt" required>
					</p>
					<p>
						<input type="password" name="password" placeholder="Password" class="txt" required>
					</p>
					<p>
						<input type="text" name="cityOfResidence" placeholder="City of residence" class="txt" required>
					</p>
					<p>
						<label class="label">Profile photo : </label>
						<input type="file" name="profile_photo" id="profile_photo" required>
					</p>
					<p>
						<button type="submit" name="register" class="btn">SIGN UP</button>	
						<input type="hidden" name="event" value="register">
					</p>
				</div>
			</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="processRegister.js"></script>
		<div class="split left">
				<div class="centered">
				<h2>Hello</h2>
					<p class="paragraph">
						Have an account?
					</p>
					<p>
					<a href="login.php">Sign in</a>
					</p>
				</div>
			</div>
	</body>
</html>