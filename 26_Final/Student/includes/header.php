<?php
    $companyName = "Franklin's Fine Dining";

    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo TITLE; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../../assets/styles.css" />
</head>
<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="img/banner.png" alt="Franklin's Fine Dining">
            </a>
        </div><!-- /#banner -->

        <div id="nav">
            <?php include('includes/nav.php'); ?>
        </div><!-- /#nav -->

        <div class="content">