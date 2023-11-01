<?php
	$path = "./";
	$page = "Place Order";
	include($path . "assets/inc/header.php")
?>

	<div id="container">
	
		<form name="OrderForm" action="orderprocess.php"  onsubmit="return validateForm();" method="post">
			<p>Name:  <input type="text" name="customerName"  /></p>
			<p>ID:  <input type="text"  name="customerID"  /></p>
			<p> Check the size of Pizza you would like to order:<br />
				<!-- Note the <label> tags below that allow the user to click on the text! -->
				<input type="radio" name ="pizzaSize" value = "P" id="personal"/><label for="personal">Personal<label><br/>
				<input type="radio" name ="pizzaSize" value = "S" id="small"/><label for="small">Small<label><br/>
				<input type="radio" name ="pizzaSize" value = "M"  id="medium" checked="true"/><label for="medium">Medium<label><br/>
				<input type="radio" name ="pizzaSize" value = "L"  id="large"/><label for="large">Large<label>
			</p>
			<p> Select the numnber of toppings you want on your pizza:<br />
				<input type="radio" name ="topping" value = "no" id="no"/><label for="no">No Extra Toppings<label><br/>
				<input type="radio" name ="topping" value = "one" id="one"/><label for="one">One Toppings<label><br/>
				<input type="radio" name ="topping" value = "two"  id="two" checked="true"/><label for="two">Two Toppings<label><br/>
				<input type="radio" name ="topping" value = "three"  id="three"/><label for="three">Three Toppings<label>
			</p>
			<p>
				<input type="submit"  name="Submit"  value=" Send Form"  />
			</p>
		</form>
	</div> 
<?php
	include($path . "assets/inc/footer.php")
?>