<?php session_start();
include_once "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order page</title>
	<link rel="stylesheet" type="text/css" href="checkOrder.css">
</head>
<body>
	<div class="dropdown">
	    <button class="dropbtn"><?php echo $_SESSION["name"] ?>
	      <i class="fa fa-caret-down"></i>
	    </button>
	    <div class="dropdown-content">
	     <a href="/iap-project/iap-labs/changePass.php">Change password</a>
		 <a href="main.php">Order</a>
	      <a href="/iap-project/iap-labs/processLogout.php">Logout</a>
	    </div>
	</div>
	<form id="order">
    <h1>Check Order status</h1>
		<div class="wrapper">
			<p>
				<input type="number" name="orderId" placeholder="Order Id" class="txt" required>
			</p>
			<p>
				<button type="submit" name="submit" class="btn">ORDER</button>	
			</p>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="processCheckOrder.js"></script>
</body>
</html>