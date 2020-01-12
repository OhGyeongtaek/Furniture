<?php 
	if(empty($_GET['mode'])) header('Location:/view');
	session_start();

	define('HOME',__dir__.'/');

	define('PAGE',HOME.'page/');
	define('_STATIC',HOME.'static/');
	define('APP',HOME.'app/');
	define('CORE',HOME.'core/');

	define('MODEL',APP.'model/');
	define('CON',APP.'controller/');

	include CORE.'function.php';
	include CORE.'model.php';
	include CORE.'view.php';
	include CORE.'controller.php';

	if(is_file(CON.$_GET['controller'].'_con.php')){
		include CON.$_GET['controller'].'_con.php';
		$con = new $_GET['controller']();
		$con->loadModel($_GET['controller']);
		if(method_exists($con,'_'.$_GET['method'])) $con->{'_'.$_GET['method']}();
	}else $con = new controller();
	
	//if($_GET['controller'] === 'admin') $con->admin();
	if(isset($con)&&$_GET['mode'] === 'view') $con->view->excute();