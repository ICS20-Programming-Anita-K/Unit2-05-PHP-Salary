<?php
	// get the hours and rate from the textfields
	$hours = $_POST['hours'];
	$rate = $_POST['rate'];

	// calculate the pay and how much the government takes
	$pay = ($rate * $hours) - ((($rate * $hours) / 100) * 18.05);  
  $tax = ((($rate * $hours) / 100) * 18.05);
?>
<h3>Results:</h3>
Your pay will be $ <?php echo "$pay" ?>.
The government will take $ <?php echo "$tax" ?>.