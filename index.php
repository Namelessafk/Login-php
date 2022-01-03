<!DOCTYPE html>
<html lang="pt-br">

<head>
	<title>Login</title>
	<?php require 'components/source.php' ?>
</head>

<body>
	<!--============================FORMS LOGIN =============================================-->
	<?php
	require 'components/header.php';
	?>
	
	<h1 class="title p-b-34 p-t-27">
						Log in
					</h1>
	
	<form id="form" class="form validate-form">
		
	<?php	include 'components/fields.php'; ?>
	<div class="container-login-form-btn">
		<button class="login-form-btn">
			Login
		</button>
		<input type="reset" class="login-form-btn-clean" value="Clean">
	</div>
	</form>

</body>

</html>