<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать в LShop!</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
 <header>
    <div class="header_logo"><p>LShop</p></div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="#">Главная</a>
                <a href="#">Каталог</a>
                <a href="#">Контакты</a>
                <a href="#">Отзывы</a>
                <a href="#">Корзина</a>
                <a href="#">Регистрация</a>
                <a href="#">Вход</a>
                <a href="#" id="menu" class="icon">&#9776</a>                
            </div>
        </nav>       
 </header>
<?php include 'applivation/views/' .$content_view; ?>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="/js/main.js"></script>
	<script src="/js/jquery-3.2.1.min.js"></script>
</body>
</html>