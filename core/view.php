<?php	
	class view{
		public $data = array();
		public $model = array();

		public function init(){
			$this->data['link'] = empty($_GET['controller'])? 'main' : 'sub' ;
		}

		public function excute(){
			$this->init();
			if(isset($this->data['link'])){
				extract($this->data);
				include PAGE.'header.php';
				include PAGE.$this->data['link'].'.php';
				include PAGE.'footer.php';
			}
		}
	}