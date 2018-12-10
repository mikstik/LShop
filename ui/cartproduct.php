<!DOCTYPE html>
<html lang="en">
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/ui/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="/ui/css/style.css"> <!-- Resource style -->
</head>
    <body>
		<h3 class="price">Карточка товара</h3>
		<ul id="card">
		<?php foreach($cartproduct as $item) : ?>
				<li class="mix color-1 check1 radio1 option1">
					<div class="linkbuttons">
						<h1 class="productname"><?= $item['name'] ?></h1>
						<img src="<?= $item['image'] ?>" alt="Image 1">
						<br>
						<h2 class="shortdescription"><?= $item['shortdescription'] ?></h2>
						<a href="product/<?= $item['id']?>"><h2 id="info">Подробнее</h2></a>
						<a href="product/<?= $item['id']?>"><h2 id="cartimg">В корзину</h2></a>
						<a href="product/<?= $item['id']?>"><h2 id="buy">Купить</h2></a>
						<h3 class="price">Цена: <?= $item['price']?> руб.</h3>
					</div>
				</li>
		<?php endforeach; ?>
		</ul>

	<table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
	<script src="ui/js/jquery-2.1.1.js"></script>
	<script src="ui/js/jquery.mixitup.min.js"></script>
	<script src="ui/js/main.js"></script> <!-- Resource jQuery -->
</body>