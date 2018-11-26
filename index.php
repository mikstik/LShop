<?php

// Kickstart the framework
$f3=require('lib/base.php');

$f3->set('DEBUG',1);
if ((float)PCRE_VERSION<7.9)
	trigger_error('PCRE version is out of date');

// Load configuration
$f3->config('config.ini');

$db = new DB\SQL(
	'mysql:host-localhost;port=3306;dbname=products',
	'root',
	''
);
	
$f3->route('GET /',
	function($f3) use($db){
	$f3->set('products', $db->exec('SELECT * FROM catalog'));
	$f3->set('content','main_view.php');
	echo View::instance()->render('template_view.php');
	echo View::instance()->render('main_view.php');
	echo View::instance()->render('footer.php');
	}
);

$f3->route('GET /about',
	function($f3) {
		$f3->set('about','about.php');
		echo View::instance()->render('template_view.php');
	}
);

$f3->route('GET /auth',
	function($f3) {
		$f3->set('auth','auth_view.php');
		echo View::instance()->render('template_view.php');
		echo View::instance()->render('auth_view.php');
	}
);

$f3->route('GET /log',
	function($f3) use($db){
		$f3->set('products', $db->exec('SELECT * FROM catalog'));
	}
);

$f3->route('GET /reg',
	function($f3) {
		$f3->set('reg','reg_view.php');
		echo View::instance()->render('template_view.php');
		echo View::instance()->render('reg_view.php');
	}
);

$f3->run();
