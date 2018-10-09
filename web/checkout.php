<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Checkout</title>
</head>
<body>
	<div class="header">
		<?php include 'header.php';?>
	</div>
	<?php 
		$nameErr = $emailErr = $addressErr = $creditErr = "";
		$name = $email = $address = $credit = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  		if (empty($_POST["name"])) {
    		$nameErr = "Name is required";
  		} 
  		else {
    		$name = test_input($_POST["name"]);
    		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      		$nameErr = "Only letters and white space allowed";
    		}
  		}
  
  		if (empty($_POST["email"])) {
    		$emailErr = "Email is required";
  		} 
  		else {
    		$email = test_input($_POST["email"]);
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$emailErr = "Invalid email format";
    		}
  		}
  		
  		if (empty($_POST["address"])) {
  				$addressErr = "Address is required";
  			}
  		else {
  			$address = test_input($_POST["address"]);
  			if (!preg_match("/^[a-zA-Z\d ]*$/", $address)) {
  			$addressErr = "Invalid address";
  			}
  		}

  		if (empty($_POST["credit"])) {
  			$creditErr = "Credit card number is required";
  		}
  		else {
  			$credit = test_input($_POST["credit"]);
  			if (!preg_match("/^((\s*\d{16}\s*)|(\s*\d{4}\s\d{4}\s\d{4}\s\d{4}\s*))$/", $credit)) {
  				$creditErr = "Invalid credit card number";
  			}
  		}
}
  		
  		function test_input($data) {
  			$data = trim($data);
  			$data = stripslashes($data);
  			$data = htmlspecialchars($data);
  			return $data;
		}
	?>
	<h2>Here is your purchase:</h2>
	<span>
		<?php
			echo "<table class='table'><tr><th>Item</th></tr>";
			foreach ($_SESSION["items"] as $purchases) {
				echo "<tr><td>$purchases</td></tr>";
			}
			echo "</table>";
		?>
	</span>
	<h1>Please enter your payment information</h1>
	<p><span class="error">* required field</span></p>
	<form method="post" action="confirm.php">  
  		Name: <input type="text" name="name" value="<?php echo $name;?>">
  		<span class="error">* <?php echo $nameErr;?></span>
  		<br><br>
  		E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  		<span class="error">* <?php echo $emailErr;?></span>
  		<br><br>
  		Address: <input type="text" name="address" value="<?php echo $address;?>">
  		<span class="error">* <?php echo $addressErr;?></span>
  		<br><br>
  		Credit Card: <input type="text" name="credit" value="<?php echo $credit;?>">
  		<span class="error">* <?php echo $creditErr;?></span>
  		<input type="submit" name="submit" value="Confirm Purchase">  
	</form>
	<div class="footer">
		<?php include 'footer.php';?>
	</div>
</body>
</html>