<?php

    // Constants
    define('TITLE', 'Arrays');

    // Custom Variables
    $name = 'Apo';
    $year = date('Y');
    $lesson_num = 8;

	// Arrays
    $age_group = array('child', 'teenager', 'adult');

    $handlebar = array(
        'name'   => 'Handlebar',
        'colour' => 'black'
    );

    $fu_manchu = array(
        'name'   => 'Fu Manchu',
        'colour' => 'brown'
    );

    $salvador_dali = array(
        'name'   => 'Salvador Dali',
        'colour' => 'blonde'
    );

    $gentlemen = array(
	   array(
           'first_name' => 'Carter',
           'country'    => 'Canada'
       ),
       array(
		   'first_name' => 'Rodrigo',
		   'country'    => 'Uruguay'
	   ),
	   array(
		   'first_name' => 'Giovani',
		   'country'    => 'Italy'
	   )
    );

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Get Your Hands Dirty: <?php echo TITLE; ?></title>
		<link href="/assets/styles.css" rel="stylesheet">
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shCore.js"></script>
		<script type="text/javascript" src="/assets/syntaxhighlighter/scripts/shBrushPhp.js"></script>
		<link type="text/css" rel="stylesheet" href="/assets/syntaxhighlighter/styles/shCoreDefault.css"/>
		<script type="text/javascript">SyntaxHighlighter.all();</script>
	</head>
	<body>
		<div class="wrapper">
			<a href="/" title="Back to directory" id="logo">
				<img src="/assets/img/logo.png" alt="PHP">
			</a>

			<h1>Get Your Hands Dirty: <small><?php echo TITLE; ?></small></h1>
			<hr>

			<h2>Your Example</h2>

			<div class="sandbox">

				<h3><?php echo $gentlemen[0]['first_name']; ?> from <?php echo $gentlemen[0]['country']; ?></h3>
				<p>

                </p>

				<h3></h3>
				<p></p>

				<h3></h3>
				<p></p>

			</div><!-- end sandbox -->

			<a href="index.php" class="button">Back to the final example</a>

			<div class="navs cf">
				<a href="" class="button prev">Previous Lecture</a>
				<a href="" class="button next">Next Lecture</a>
			</div><!-- end navs -->

			<hr>

			<small>&copy;<?php echo $year; ?> - <?php echo $name; ?></small>
		</div><!-- end wrapper -->

		<div class="copyright-info">
			<?php include('../assets/includes/copyright.php'); ?>
		</div><!-- end copyright-info -->
	</body>
</html>
