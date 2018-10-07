<?php
session_start()
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
	<div>
		<?php
			$products = $_POST['product'];
			foreach ($products as $product) {
				$_SESSION["product"] = $product;
			}
			print_r($_SESSION);
		?>
	</div>
	<div class="footer">
		<?php include 'footer.php';?>
	</div>

</body>
</html>