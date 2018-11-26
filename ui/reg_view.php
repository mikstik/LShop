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
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(ui/img/bg-01.jpg);">
					<span class="login100-form-title-1">
						Регистрация
					</span>
				</div>

				<form class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">E-mail</span>
						<input class="input100" type="text" name="username" placeholder="Введите почту">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Имя</span>
						<input class="input100" type="text" name="username" placeholder="Ваше имя">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Пароль</span>
						<input class="input100" type="password" name="pass" placeholder="Введите пароль">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Ещё раз</span>
						<input class="input100" type="password" name="pass" placeholder="Повторите пароль">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Зарегистрироваться
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="js/main.js"></script>
</body>
</html>