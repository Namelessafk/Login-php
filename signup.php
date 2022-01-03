<!DOCTYPE html>
<html lang="pt-br">

<head>
	<?php include 'components/source.php' ?>
</head>

<body>
	<?php
	require 'components/header.php';

	?>
	<h1 class="title p-b-34 p-t-27">
						Signup
					</h1>
	<form id="form" class="form validate-form">
	<?php 	include 'components/fields.php'; ?>
	
	<div class="wrap-input validate-input">
		<input class="input" type="confirm_password" name="confirmpass" placeholder="Confirm Password">
		<span class="focus-input" data-placeholder="&#xf191;"></span>
	</div>

	<div class="container-login-form-btn">
		<button class="login-form-btn">
			Sign Up
		</button>

		<input type="reset" class="login-form-btn-clean" value="Clean">
	</div>
	</form>

</body>

</html>