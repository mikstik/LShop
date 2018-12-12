<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');
$view;

$db = new DB\SQL(
	'mysql:host-localhost;port=3306;dbname=products',
	'root',
	''
);

$db_mapper = new \DB\SQL\Mapper($db, 'users');
$f3->route('POST /login',
	function($f3) use($db,$db_mapper,$auth){
		if ($f3->get('SESSION.user') == null){
			$auth = new \Auth($db_mapper, ['id'=>'username', 'pw'=>'password']);
			$login_result = $auth->login($f3->get('POST.username'),$f3->get('POST.password'));
			if ($login_result == true)
			{
				new Session();
				$f3->set("SESSION.user", 'user');
				$f3->reroute('/');
				echo View::instance()->render('template_view.php');
			}
			else{
				$f3->reroute('/auth');
				echo'<script>alert("Неправильный логин или пароль!");</script>';
			}
		}
		else{
			$f3->reroute('/');
			exit;
		}
	}
);

$f3->route('POST /registration',
	function($f3) use($db){
		if ($f3->get('SESSION.user') == null){
			if($f3->get('POST.password') == $f3->get('POST.pass')){
				new Session();
				$f3->set("SESSION.user", $user);
				$f3->set('regist', $db->exec('INSERT INTO users(username,password,name) VALUES (?,?,?)',
				array (1=>$f3->get('POST.username'), 2=> $f3->get('POST.password'), 3=> $f3->get('POST.name'))));
				$f3->reroute('/');
			}
			else{
				// echo ('POST.password');
				// echo ('POST.pass');
				echo'<script>alert("Пароли не совпадают!");</script>';
			}
		}
		else{
			$f3->reroute('/reg');
		}
	}
);
	
$f3->route('GET /',
	function($f3) use($db){
	$f3->set('products', $db->exec('SELECT * FROM categories'));
	$f3->set('categories','categories_view.php');
	$f3->set('content','main_view.php');
	$f3->set('footer','footer.php');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /auth',
	function($f3) {
		$f3->set('content','auth_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /laptop',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Ноутбук"'));
		$f3->set('categories','product_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /reg',
	function($f3) {
		$f3->set('content','reg_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /cart',
	function($f3) use($db){
	$tovars = $f3->get('SESSION.products', $tovar);
		if($tovars !== null){
			$f3->set('purchapes', $db->exec('SELECT * FROM product WHERE id IN('.implode(',',$tovars).')'));
			$f3->set('sumprice', $db->exec('SELECT SUM(price) FROM product WHERE id IN('.implode(',',$tovars).')'));
			$f3->set('content','cartproduct_view.php');
			$f3->set('footer','fake_footer.php');
			echo View::instance()->render('template_view.php');
		}
		else{
			$f3->clear('SESSION.products', $tovar);
			$f3->reroute('/');
		}
	}
);

$f3->route('GET /smartphones',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Смартфон"'));
		$f3->set('categories','product_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /mouse',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Мышь"'));
		$f3->set('categories','product_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /headset',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Гарнитура"'));
		$f3->set('categories','product_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /out',
	function($f3){
		$f3->clear('SESSION.user', $user);
		$f3->clear('SESSION.products', $tovar);
		$f3->reroute('/');
	}
);

$f3->route('GET /product/@id',
	function($f3) use($db){
	$id = $f3->get('PARAMS.id');
	$f3->set('cartproduct', $db->exec('SELECT * FROM product WHERE id='.$id));
	$f3->set('content','cartproduct.php');
	$f3->set('footer','fake_footer.php');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /addtocart/@id',
	function($f3) use($db){
	$id = $f3->get('PARAMS.id');
	$tovar = $f3->get('SESSION.products');
	$tovar[] = $id;
	$f3->set('SESSION.products', $tovar);
	//var_dump($f3->get('SESSION.products'));
	$f3->reroute('/');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /cartclear',
	function($f3) use($db){
	$f3->clear('SESSION.products', $tovar);
	$f3->reroute('/cart');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /buyproduct/@id',
	function($f3) use($db){
	$f3->clear('SESSION.products', $user);
	$id = $f3->get('PARAMS.id');
	$tovar = $f3->get('SESSION.products');
	$tovar[] = $id;
	$f3->set('SESSION.products', $tovar);
	$f3->reroute('/cart');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /deletefromcart/@id',
function($f3) use($db){
	$tovars = $f3->get('SESSION.products', $tovar);
	if($tovars !== null)
	{
		$id = $f3->get('PARAMS.id');
		$tovar = $f3->get('SESSION.products');
		$id = array_search($id, $tovar);
		if($id !== false){
			unset($tovar[$id]);
			if($tovar == null){
				$f3->clear('SESSION.products', $tovar);
			}
			$f3->set('SESSION.products', $tovar);
		}
		else{
			$f3->clear('SESSION.products', $tovar);
			$f3->reroute('/');
		}
		$f3->reroute('/cart');
	}
	else{
		$f3->clear('SESSION.products', $tovar);
		$f3->reroute('/');
	}
	//$f3->reroute('/');
});

$f3->route('GET /buyproduct/@id',
	function($f3) use($db){
	$f3->clear('SESSION.products', $user);
	$id = $f3->get('PARAMS.id');
	$tovar = $f3->get('SESSION.products');
	$tovar[] = $id;
	$f3->set('SESSION.products', $tovar);
	$f3->reroute('/cart');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /adminpanel',
	function($f3) use($db){
	$f3->set('content','adminpanel.php');
	$f3->set('footer','fake_footer.php');
	echo View::instance()->render('template_view.php');
	}
);

$f3->run();
