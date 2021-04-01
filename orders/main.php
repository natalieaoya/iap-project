<?php session_start();
include_once "../iap-labs/db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Order page</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="dropdown">
	    <button class="dropbtn"><?php echo $_SESSION["name"] ?>
	      <i class="fa fa-caret-down"></i>
	    </button>
	    <div class="dropdown-content">
	     <a href="../iap-labs/changePass.php">Change password</a>
	      <a href="../iap-labs/processLogout.php">Logout</a>
	    </div>
	</div>
	<form id="order">
		<div class="wrapper">
			<p>
			<input type="text" name="food_item" list="food" placeholder="Food Item" class="txt" required autocomplete="off">
			<?php
					require_once("dbconnect.php");
					$sql = "SELECT food_name from food_items";
					$result = mysqli_query($link,$sql);
					while ($row = $result->fetch_array())
					{
						$foodName=$row["food_name"];
			?>
				<datalist id="food">
					<option><?php echo $foodName?></option>
					</datalist>
			<?php 
				}
			?>
			</p>
			<p>
				<input type="number" name="quantity" placeholder="Quantity" class="txt" required>
			</p>
			<p>
				<button type="submit" name="submit" class="btn">ORDER</button>	
			</p>
		</div>
	</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="processOrder.js"></script>
</body>
</html>