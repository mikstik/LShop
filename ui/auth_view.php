<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="ui/css/util.css">
	<link rel="stylesheet" type="text/css" href="ui/css/main.css">
	<link rel="stylesheet" type="text/css" href="ui/css/style.css">
	<link rel="stylesheet" type="text/css" href="ui/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="ui/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="ui/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="ui/css/style.css"> <!-- Resource style -->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(ui/img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Авторизация
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="/login">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="username" placeholder="Введите почту">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Пароль</span>
						<input class="input100" type="password" name="password" placeholder="Введите пароль">
						<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" type="submit">
						Войти
					</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>