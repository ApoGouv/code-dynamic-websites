<?php

	// Define a Constant
	define("TITLE", "Variables and Constants");

	// Your Variables
	$name = "Apo";
	$fav_color = "Green";
	$birth_year = 1987;

    /*
        When using the date() method, PHP has to know the timezone where the server resides,
        in order to output the correct hour and date for that geographical location.
        The date_default_timezone_set() method takes a string that locates the server.
        The list of supported timezones can be found at http://php.net/manual/en/timezones.php
    */
    date_default_timezone_set('Europe/Athens');

    // more for date() at: http://php.net/manual/en/function.date.php
    $today = date('F j, Y'); // Month day, Year
    $this_year = date('Y');

    /*
    Use PHP to calculate the difference
    between your birth year and this year
    to show your age dynamically
    */
    $my_age = ($this_year - $birth_year);


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <!-- PAGE TITLE --> <?php echo TITLE; ?> </title>
		<link href="../assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="../assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><!-- PAGE TITLE --> <?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">
				<h3>Today's Date:</h3>
				<p><!-- DATE --><?php echo $today; ?> </p>

				<h3>My Name:</h3>
				<p><!-- YOUR NAME --><?php echo $name; ?> </p>

				<h3>My Favourite Colour:</h3>
				<p><!-- FAVOURITE COLOUR --><?php echo $fav_color; ?> </p>

				<h3>My Age:</h3>
				<p><!-- YOUR AGE --><?php echo $my_age; ?> </p>
			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<hr>

			<small>&copy;<!-- THIS YEAR --><?php echo $this_year; ?> - <!-- YOUR NAME --><?php echo $name; ?> </small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
