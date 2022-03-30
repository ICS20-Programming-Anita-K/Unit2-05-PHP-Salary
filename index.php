<!DOCTYPE html>
<html lang="en">
	<head>
    <!-- Meta data -->
    <meta charset="utf-8">
    <meta name="description" content="Salary Program, with PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Salary Program, with PHP</title>
	</head>
	<body>
    <center>
    <!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Salary Program, in PHP</h1>";
		?>
    </center>
    <?php
      echo "<h3>Please enter your employment information:</h3>"
    ?>
		<!-- form to get the base and height from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblBase">Number of hours worked:</label>
      <input type="float" id="hours" placeholder="Enter the hours" name="hours"><br><br>
      <label for="lblHeight">Hourly rate $</label>
      <input type="float" id="rate" placeholder="Enter the rate" name="rate"><br><br>
      <input type="submit" value="Pay">
    </form>
		<!-- iframe so results can show on the web page. -->
			<iframe id="results" name="results">			
	    </iframe>
    <!-- Image -->
    <center>
    <?php
      echo "<br><img src='./images/money.jpeg' alt='money' width='75%'>";
    ?>
    </center>
	</body>
</html>