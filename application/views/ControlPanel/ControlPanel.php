<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html">
		
		<title>Control panel</title>
		
		<!-- Stylesheets -->
		<link href="/assets/css/controlpanel.css" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<!-- Scripts -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/assets/js/ControlPanel/controlpanel.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
				<h3>Hello, <?= $user->first_name ? $user->first_name : $user->email ?></h3>
			</header>
			<div id="content-wrapper" class="row">
				<nav id="menu">
					<a href="#pages">Pages</a>
					<a href="#categories">Categories</a>
					<a href="#menus">Menus</a>
					<a href="#media">Media</a>
					<a href="#users">Users</a>
					<a href="#profile">My profile</a>
					<a href="/ControlPanel/Logout">Log out</a>
				</nav>
				<div id="content-row">
					<div id="content">
						<h2>Scorpiac control panel</h2>
					</div>
					<div id="loading">
						<img src="/assets/img/loading.gif">
					</div>
				</div>
			</div>
			<footer>
				<h3>Control panel made by Scorpiac</h3>
			</footer>
		</div>
	</body>
</html>