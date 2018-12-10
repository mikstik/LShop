<!DOCTYPE html>
<html lang="en">
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/ui/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/ui/css/style.css"> <!-- Resource style -->
</head>
    <body>
    <main class="cd-main-content">
	
	<section class="cd-gallery" id="cart">
		<table>
			<tr>
				<th>
					<a href="cartclear"><h2 class="endprice">Очистить корзину</h3></a>
				</th>
				<th>
					<h3 class="price">Общая стоимость: <?php echo array_sum($prices["price"]); ?> рублей</h3>
				</th>
				<th>
					<a href=""><h2 class="getoffer">Оформить заказ</h3></a>
				</th>
			</tr>
		</table>
		<br>
		<ul id="cards">
			<?php foreach($purchapes as $item) : ?>
				<li class="mix color-1 check1 radio1 option1">
					<div class="linkbuttons">
						<a href="deletefromcart/<?= $item['id']?>"><h2 id="deletecard">✖</h2></a>
						<h1 class="productname"><?= $item['name'] ?></h1>
						<img src="<?= $item['image'] ?>">
						<br>
						<h3 class="shortdescription"><?= $item['shortdescription']?></h2>
						<h2 class="price">Кол-во: 1</h2>
						<h3 class="price">Цена: <?= $item['price']?> руб.</h3>
					</div>
				</li>
			<?php endforeach; ?>
			
	    </ul>
		<div class="cd-fail-message">Ничего не найдено :(</div>
    </section>
	</main> <!-- cd-main-content -->
	<script src="ui/js/jquery-2.1.1.js"></script>
	<script src="ui/js/jquery.mixitup.min.js"></script>
	<script src="ui/js/main.js"></script> <!-- Resource jQuery -->
</body>