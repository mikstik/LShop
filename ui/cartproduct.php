<!DOCTYPE html>
<html lang="en">
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/ui/css/reset.css">
	<link rel="stylesheet" href="/ui/css/style.css">
</head>
<body class="crtprdct">

<div class="productdescription">
<?php foreach($cartproduct as $item) : ?>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <img src="<?= $item['image'] ?>" id="imgcart">
    </div>
    <div class="col">
      <div class="row">
        <div class="col" id="nameandtypeproduct">
          <h1 class="productname"><?= $item['type_product']?> <?= $item['name'] ?></h1>
        </div>
      </div>
      <div class="row">
        <div class="col" id="descriptionproduct">
          <h2 class="productname" style="margin-right:20px; text-align:justify;"><?= $item['description']?></h2>
          <br>
          <br>
          <h3 class="price" style="font-size:27px; font-weight: 900; color:black;">Цена: <?= $item['price']?> руб.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col" id="addbuttons">
            <a href="/"><h2 id="backtocatalog">В каталог</h2></a>
            <a href="addtocart/<?= $item['id']?>"><h2 id="incart">В корзину</h2></a>
            <a href="buyproduct/<?= $item['id']?>"><h2 id="alrightbuy">Купить</h2></a>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php endforeach; ?>
</div>
  
<script src="ui/js/jquery-2.1.1.js"></script>
<script src="ui/js/jquery.mixitup.min.js"></script>
<script src="ui/js/main.js"></script> <!-- Resource jQuery -->

</body>