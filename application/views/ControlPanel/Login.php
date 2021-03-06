<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html">
		
		<title>Log in to control panel</title>
		
		<!-- Stylesheets -->
		<link href="/assets/css/controlpanel.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

		<!-- Scripts -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="/assets/js/ControlPanel/login.js"></script>
	</head>
	<body>
		<div id="login-container">
			<div id="login-content">
				<!-- Login -->
				<form id="login-form">
					<h3>Log in</h3>
					<p>
						<label for="user">E-mail address</label><br>
						<input id="user" type="text" required>
					</p>
					<p>
						<label for="pass">Password</label><br>
						<input id="pass" type="password" required>
					</p>
					<p>
						<input id="remember" type="checkbox">
						<label for="remember">Remember me</label>
					</p>
					<p>
						<button class="blue">Log in</button>
						<button type="button" id="recover-button">Forgot password?</button>
					</p>
				</form>
				<!-- Information -->
				<p id="info" class="error"></p>
			</div>
		</div>
	</body>
</html>