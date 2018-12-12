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
					<h3 class="price">Общая стоимость: <?php foreach($sumprice as $item) : print_r($item['SUM(price)']); endforeach?> рублей</h3>
				</th>
				<th>
					<button type="button" class="btn btn-primary getoffer" data-toggle="modal" data-target="#exampleModal" style="font-size:16px;">
  					Оформить заказ
					</button>
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
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
        			<h5 class="modal-title" id="exampleModalLabel">Оформление заказа</h5>
        			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        			</button>
      			</div>
     			<div class="modal-body">
        		<form action="" method="POST">
				<h1>Введите имя:</h1>
				<input type="text" placeholder="Александр" class="form-control">
				<br>
				<h1>Введите номер телефона:</h1>
				<input type="text" placeholder="+7 (999) 999-99-99" class="form-control form-control phone bfh-phone mask-phone">
				</form>
      			</div>
      			<div class="modal-footer">
        		<button type="submit" class="btn btn-secondary" data-dismiss="modal">Отменить</button>
        		<a href="/addorder"><button type="button" class="btn btn-primary">Отправить</button></a>
      			</div>
    		</div>
 		 </div>
	</div>
	<script type="text/javascript">
		$('#myModal').on('shown.bs.modal', function() {
  		$('#myInput').trigger('focus')
		})
	</script>
	<script src="ui/js/jquery-2.1.1.js"></script>
	<script src="ui/js/jquery.mixitup.min.js"></script>
	<script src="ui/js/main.js"></script> <!-- Resource jQuery -->
</body>