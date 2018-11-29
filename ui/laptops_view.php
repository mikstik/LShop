<?php foreach($laptops as $item) : ?>
				<li class="mix color-1 check1 radio1 option1">
					<div class="linkbuttons">
						<h1 class="productname"><?= $item['name'] ?></h1>
						<img src="<?= $item['image'] ?>" alt="Image 1">
						<br>
						<h2 class="shortdescription"><?= $item['shortdescription'] ?></h2>
						<a href=" <?= $item['id']?>"><h2 id="info">Подробнее</h2></a>
						<a href="<?= $item['id']?>"><h2 id="cartimg">В корзину</h2></a>
						<a href="<?= $item['id']?>"><h2 id="buy">Купить</h2></a>
						<h3 class="price">Цена: <?= $item['price']?> руб.</h3>
					</div>
				</li>
<?php endforeach; ?>

	

