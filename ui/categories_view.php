<?php foreach($products as $item): ?>
	<li class="mix color-1 check1 radio1 option1">
		<div class="linkbuttons">
		    <h1 class="productname"><?= $item['name'] ?></h1>
			<a href="<?= $item['href'] ?>"><img src="<?= $item['image'] ?>" alt="Image 1"></a>
			<br>
			<h2 class="shortdescription"><?= $item['shortdescription'] ?></h2>
        </div>
    </li>
<?php endforeach; ?>

