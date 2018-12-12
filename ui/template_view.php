<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать в LShop!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/ui/css/style.css">
</head>
<body>
<header class="clearfix">
    <div class="container">
			<div class="header-left">
				<a href="/"><h1>LSHOP</h1></a>
			</div>
			<div class="header-right">
				<label for="open">
					<span class="hidden-desktop"></span>
				</label>
				<input type="checkbox" name="" id="open">
				<nav>
					<a href="/">Главная</a>
					<?php if(($_SESSION['products']) !== null) :?>
					<a href="cart">Корзина</a>
					<?php else :?>
					<?php endif; ?>
					<?php if(($_SESSION['user']) !== null) :?>
					<a href="out">Выйти</a>
					<?php else :?>
					<a href="reg">Регистрация</a>
					<a href="auth">Вход</a>	
					<?php endif; ?>
					
				</nav>
			</div>
		</div>
    </header>
   <section class="clearfix">
		<div class="container">
			<div class="section-left">
				
			</div>
		</div>
	</section>
	<div>
	<?php echo $this->render(Base::instance()->get('content')) ?>
	<?php echo $this->render(Base::instance()->get('footer')) ?>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="/ui/js/main.js"></script>	
</body>
</html>
