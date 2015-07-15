<?php
session_start();
if(isset($_SESSION['auth'])) { // Existing User who is Already SignedIn
	header("location: dashboard/");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Address Book App</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

	<!-- Custom Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

	<!-- Plugin CSS -->
	<link rel="stylesheet" href="css/animate.min.css" type="text/css">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/creative.css" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body id="page-top">

<header>
	<div class="header-content">
		<div class="header-content-inner">
			<h1>Address Book</h1>
			<hr>
			<p>Hi there! you have reached the world's most simplest address book app</p>
			<a href="signin" class="btn btn-primary btn-xl page-scroll">Sign In</a>
			<a href="signup" class="btn btn-primary btn-xl page-scroll">Sign Up</a>
		</div>
	</div>
</header>

<aside class="bg-dark">
	<div class="container text-center">
		<div class="call-to-action">
			<p class="credits">Copyright © 2015 -2018 Hamzeen. H., made with bootstrap</p>
		</div>
	</div>
</aside>


<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
