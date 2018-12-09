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

new Session();
$db_mapper = new \DB\SQL\Mapper($db, 'users');
$f3->route('POST /login',
	function($f3) use($db,$db_mapper,$auth){
		if ($f3->get('SESSION.user') === null){
			$auth = new \Auth($db_mapper, ['id'=>'username', 'pw'=>'password']);
			$login_result = $auth->login($f3->get('POST.username'),$f3->get('POST.password'));
			if ($login_result = true)
			{
				$f3->set("SESSION.user", user);
				$f3->reroute('/');
				echo View::instance()->render('template_view.php');
			}
			else{
				$f3->set('content','auth_view.php');
				echo View::instance()->render('template_view.php');
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
				$f3->set("SESSION.user", user);
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
		$f3->set('categories','laptops_view.php');
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
	$f3->set('purchapes', $db->exec('SELECT * FROM product'));
	$f3->set('content','cart_view.php');
	$f3->set('footer','fake_footer.php');
	echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /smartphones',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Смартфон"'));
		$f3->set('categories','laptops_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /mouse',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Мышь"'));
		$f3->set('categories','laptops_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /headset',
	function($f3) use($db){
		$f3->set('laptops', $db->exec('SELECT * FROM product WHERE type_product="Гарнитура"'));
		$f3->set('categories','laptops_view.php');
		$f3->set('content','main_view.php');
		$f3->set('footer','footer.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /out',
	function($f3){
		$f3->clear('SESSION.user', user);
		$f3->reroute('/');
	}
);


$f3->run();
