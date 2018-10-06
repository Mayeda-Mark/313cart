//cart.js

function addToCart(name, price) {
	var txt = "<?php $_SESSION[\"" + name +"\"] = \""
	+ name "\"; $_SESSION[\"" + name + "price\"] = \"" 
	+ price + "\"; ?>";
	document.getElementById('emptySpace').innerHTML = txt;
}