<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="stylesheet.css">
	<title>Browse</title>
</head>
<body>
<?php
	$products = "";

	function test_input($data) {
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
?>

	<div class="header">
		<?php include 'header.php';?>
	</div>
	<h1>Click on an item's checkbox to add them to your cart</h1>
	<form id="cart" method="post" action="viewCart.php">
		<table style="border: 1px solid black";>
			<tr>
				<th></th>
				<th>Item</th>
				<th>Picture</th>
				<th>Price</th>
				<th>Description</th>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Mr. Buttons" >
				</form></td>
				<td>Mr. Buttons</td>
				<td><img src="https://i.imgur.com/eADvu2n.jpg" width="150" height="125" /></td>
				<td>$50</td>
				<td>Mr. Buttons is a lovely gray cat.  He has a very outgoing personality but refuses to ever take a bath.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Freddy Meowcurry" ></td>
				<td>"Freddy Meowcurry"</td>
				<td><img src="https://i.imgur.com/AGThVJj.jpg" width="150" height="125"/></td>
				<td>$50</td>
				<td>Freddy Meowcurry is a loving siamese cat with a long list of hit singles and platinum albums in his resume.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Calico Jack"></td>
				<td>Calico Jack</td>
				<td><img src="https://i.imgur.com/2jbNmgN.jpg" height="125" width="150" /></td>
				<td>$50</td>
				<td>Calico Jack is the bravest cat to ever sail the seven seas.  With his trusted parrot, Crackers, he is always on the lookout for adventure.  Also, he has diabetes.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Spock"></td>
				<td>Spock</td>
				<td><img src="https://i.imgur.com/O8RxLUb.jpg" width="150" height="125" /></td>
				<td>$50</td>
				<td>Spock is a cat who likes to scratch web developers who are in charge of making cat sales websites.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Astoroth, the World Breaker"></td>
				<td>Astoroth, the World Breaker</td>
				<td><img src="https://i.imgur.com/7t2X5tC.jpg" width="150" height="125" /></td>
				<td>$75</td>
				<td>Astoroth, the World Breaker is a lovely black cat who loves to cuddle and sit in the sun.  He claims that he's here to bring about the end times outlined in the book of Revelation, but he's a really sweet boy.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Paul"></td>
				<td>Paul</td>
				<td><img src="https://i.imgur.com/aEwwYYG.jpg" width="125" height="125" /></td>
				<td>$20</td>
				<td>Paul is a cat who likes doing cat things.  He eats cat food and listens to cat music.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Licki Brush"></td>
				<td>Licki Brush</td>
				<td><img src="https://i.imgur.com/2EyL6p3.jpg" width="150" height="125" /></td>
				<td>$25</td>
				<td>Have you ever watched your cat lick another cat and though to yourself "I wish that I could do that without getting fur in my mouth"?  If so, the Licki Brush is just the product for you.  With this patented brush, you can groom your cat while pretending to lick it, because that's a normal thing to do.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Cat Exercise Wheel"></td>
				<td>Cat Exercise Wheel</td>
				<td><img src="https://i.imgur.com/LL3wOWR.jpg" width="150" height="125" /></td>
				<td>$50</td>
				<td>You cat will love this cat-sized exercise wheel.  Everyone with a cat will tell you that cats don't ever walk around on their own, so this is the perfect item to help your cat keep in shape, and honestly, it needs it after that nasty divorce it's just been through.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="U-Pet Carrier"></td>
				<td>U-Pet Carrier</td>
				<td><img src="https://i.imgur.com/QWtoZ2S.jpg" width="125" height="125" /></td>
				<td>$35</td>
				<td>With this pet carrier, you can show your cat the wonders of the world without worying about it escaping or getting into a fight with any other cats whos territory you may wander into.</td>
			</tr>
			<tr>
				<td>
						<input type="checkbox" name="products[]" value="Kitten Mittons"></td>
				<td>Kitten Mittons</td>
				<td><img src="https://i.imgur.com/Zjm0949.jpg" width="150" height="125" /></td>
				<td>$20</td>
				<td> Is your cat making TOO MUCH NOISE all the time? Is your cat constantly stomping around driving you crazy? Is your cat clawing at your furnitures? Think there’s no answer? You’re so stupid. There is! Kitten Mittons! Finally there’s an elegant, comfortable mitten for cats! Is your cat one legged? Is your cat fat, skinny or an in between? That doesn’t matter ‘cuz one size fits all! Kitten Mittons, you’ll be smitten. Meee-owww!</td>
			</tr>
		</table>
			<button name="submit" type="submit" form="cart">View Cart</button>
	</form>
	<div class="footer">
		<?php 
		include 'footer.php'
		;?>
	</div>

</body>
</html>