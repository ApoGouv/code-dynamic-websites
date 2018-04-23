<?php

	// Constants
	define('TITLE', 'Associative Arrays');

	// Custom Variables
    $lesson_num = 7;
    $name = 'Apo';

	// Moustache Associative Array
    $handlebar = array(
        'name'            => "handlebar",
        'creep_factor'    => "High",
        'avg_growth_days' => 14
    );
?>

<!DOCTYPE html>
<html>
	<head>
		<title>PHP <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Tutorial <!-- LESSON NUMBER --><?php echo $lesson_num; ?>: <small><!-- PAGE TITLE --><?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h2>The <!-- MOUSTACHE NAME --><?php echo $handlebar['name']; ?> Moustache!</h2>
				<p>This moustache is quite the dirt squirrel! It boasts a creep factor of <strong><!-- CREEP FACTOR --><?php echo $handlebar['creep_factor']; ?></strong> and takes <strong><!-- GROWTH DAYS --><?php echo $handlebar['avg_growth_days']; ?> days</strong> to grow on average.</strong></p>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the lecture</a>

			<hr>

			<small>&copy;<!-- YEAR --><?php echo date('Y'); ?> - <!-- YOUR NAME --><?php echo $name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
