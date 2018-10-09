<?php
session_start();
	$products = $_POST['products'];
	foreach ($products as $product) {
		$_SESSION["items"][$product] = $product;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Your Shopping Cart</title>
</head>
<body>
	<div class="header">
		<?php include 'header.php';?>
	</div>
	<h1>Please review your purchases:</h1>
	<div>
		<?php
			echo "<table class='table'><tr><th>Item</th></tr>";
			foreach ($_SESSION["items"] as $purchases) {
				echo "<tr><td>$purchases</td></tr>";
			}
			echo "</table>";
		?>
		<br>
		<input type="button" onclick="location.href='checkout.php';" value="Click here to checkout">
		<input type="button" onclick="location.href='browse.php';" value="Click here to go back to our cats">
	</div>
	<div class="footer">
		<?php include 'footer.php';?>
	</div>

</body>
</html>