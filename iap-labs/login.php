<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" href="loginPage.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form id="signIn" method="post">
			<div class="split right">
				<div class="centered">
					<h1>Sign In</h1>
					<p>
						<input type="email" name="email" placeholder="Email" class="line" required>
					</p>
					<p>
						<input type="password" name="password" placeholder="Password" class="line" required>
					</p>
					<p>
						<button type="submit" class="btn" name="login">Login</button>
						<input type="hidden" name="event" value="login">
					</p>
				</div>
			</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="processLoginForm.js"></script>
		<div class="split left">
			<div class="centered">
				<h2>Hello</h2>
				<p class="paragraph">
					New here?
				</p>
				<p>
					<a href="register.php">Sign Up</a>
				</p>
			</div>
		</div>
	</body>
</html>