<?php
	class controller{

		public $model = array();
		public $view;

		public function __construct(){
			$this->view = new view();
			$this->loadModel('menu');
		}

		public function loadModel($name){
			if(is_file(MODEL.$name.'_model.php')){
				include MODEL.$name.'_model.php';
				$model = $name.'Model';
				$this->model[$name] = new $model();
				$this->view->model[$name] = new $model();
				$model = $name.'Model';
			}
		}
	}