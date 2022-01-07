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


	<form id="form" method="post" class="form validate-form" action="components/connect.php">
	<?php require 'components/fields.php' ?>
	<div class="wrap-input validate-input">
		<input class="input" type="text" name="confirm_pwd" placeholder="Confirm Password">
		<span class="focus-input" data-placeholder="&#xf191;"></span>
	</div>

	<div class="container-login-form-btn">
		<input type="submit" class="login-form-btn" value="Sign Up" style="cursor: pointer;">
			
		<input type="reset" class="login-form-btn-clean" value="Clean">
	</div>
	</form>

</body>
</html>