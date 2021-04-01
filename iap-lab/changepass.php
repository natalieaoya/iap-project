<!DOCTYPE html>
<html>
	<head>
		<title>Change password</title>
		<link rel="stylesheet" href="changepassword.css">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<form id="changePass" method="POST">
			<div class="body">
                <h1>Change Password</h1>
				<p>
					<input type="text" name="cpassword" placeholder="Current Password" class="line" required>
				</p>
				<p>
					<input type="text" name="npassword" placeholder="New Password" class="line" required>
                </p>
                <p>
                    <button type="submit" class="btn" name="Confirm">Confirm</button>
                    <input type="hidden" name="event" value="changePassword">
                </p>
			</div>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="processChangePass.js"></script>
	</body>
</html>