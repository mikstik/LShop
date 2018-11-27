<?php
function getLaptop(){
    foreach($products as $item)?>
    <li class="mix color-1 check1 radio1 option1">
					<div class="linkbuttons">
						<h1 class="productname"><?= $item['type_product']?></h1>
						<h1 class="productname"><?= $item['name'] ?></h1>
						<img src="<?= $item['image'] ?>" alt="Image 1">
						<br>
						<h2 class="shortdescription"><?= $item['shortdescription'] ?></h2>
				<h2 id="info"><a href=" <?= $item['id']?> ">Подробнее</a></h2>
		        <h2 id="buy"><a href="<?= $item['id']?>">Купить</a></h2>
		    <h3 class="price">Цена: <?= $item['price']?> руб.</h3>
		</div>
    </li> <?
    endforeach;
}

?>