<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="ui/css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="ui/css/style.css"> <!-- Resource style -->
	<script src="ui/js/modernizr.js"></script> <!-- Modernizr -->
	<title>Фильтры</title>
</head>
<body>
	<div class="stock">
        <p><img src="ui/img/mainpicture.jpg" class="discount"></p>
    </div>
	<header class="cd-header">
		<h1>Наши продукты:</h1>
	</header>
	<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">Всё</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">Всё</a></li>
					<li class="filter" data-filter=".color-1"><a href="#0" data-type="color-1">Intel</a></li>
					<li class="filter" data-filter=".color-2"><a href="#0" data-type="color-2">AMD</a></li>
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>

				<?php foreach($products as $item) : ?>
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
				</li>
				<?php endforeach; ?>	

				<!-- <li class="mix color-2 check2 radio2 option2"><img src="ui/img/xiaomi.png" alt="Image 2"></li>
				<li class="mix color-1 check3 radio3 option1"><img src="ui/img/xiaomi.png" alt="Image 3"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="ui/img/xiaomi.png" alt="Image 4"></li>
				<li class="mix color-1 check1 radio3 option2"><img src="ui/img/xiaomi.png" alt="Image 5"></li>
				<li class="mix color-2 check2 radio3 option3"><img src="ui/img/xiaomi.png" alt="Image 6"></li>
				<li class="mix color-2 check2 radio2 option1"><img src="ui/img/xiaomi.png" alt="Image 7"></li>
				<li class="mix color-1 check1 radio3 option4"><img src="ui/img/xiaomi.png" alt="Image 8"></li>
				<li class="mix color-2 check1 radio2 option3"><img src="ui/img/xiaomi.png" alt="Image 9"></li>
				<li class="mix color-1 check3 radio2 option4"><img src="ui/img/xiaomi.png" alt="Image 10"></li>
				<li class="mix color-1 check3 radio3 option2"><img src="ui/img/xiaomi.png" alt="Image 11"></li>
				<li class="mix color-2 check1 radio3 option1"><img src="ui/img/xiaomi.png" alt="Image 12"></li> -->
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">Ничего не найдено :(</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Поиск</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Например: ноутбук">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Диагональ</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">Менее 13.3</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">От 13.3 до 15.6</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">Свыше 15.6</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Сортировка</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Сортировать по:</option>
								<option value=".option1">Цене (с дешевых)</option>
								<option value=".option2">Цене (с дорогих)</option>
								<option value=".option3">Дате</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Производители</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">Не важно</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">AMD</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">Intel</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Фильтры</a>
	</main> <!-- cd-main-content -->
<script src="ui/js/jquery-2.1.1.js"></script>
<script src="ui/js/jquery.mixitup.min.js"></script>
<script src="ui/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>