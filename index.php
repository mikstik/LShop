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
		$f3->set('laptops', $db->exec('SELECT * FROM laptops'));
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
	$f3->set('purchapes', $db->exec('SELECT * FROM laptops'));
	$f3->set('content','cart_view.php');
	$f3->set('footer','fake_footer.php');
	echo View::instance()->render('template_view.php');
	}
);

// $db_mapper = new \DB\SQL\Mapper($db, 'users');
// $f3->route('POST /login',
// 	function($f3) use($db,$db_mapper,$auth){
// 		$auth = new \Auth($user, array('id'=>'username', 'pw'=>'password'));
// 		$login_result = $auth->login($f3->get('POST.username'),$f3->get('POST.password'));
// 		var_dump($login_result);
// 	}
// );

// $f3->route('POST /registration',
// 	function($f3) use($db){
// 		$auth = new \Auth($user, array('id'=>'username', 'pw'=>'password'));
// 		$f3->set('registr', $db->exec('INSERT INTO users VALUES(username, password, name)',('POST.username,POST.password,POST.name')));
// 	}
// );

// function kek(){
// 	echo "kjk";
// }

$f3->run();
