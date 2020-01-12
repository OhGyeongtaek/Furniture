<?php
	class admin extends controller{
		public function _admin(){
			if(empty($_SESSION['id'])||$_SESSION['id'] !== 'asdf123'){
				header('Location:/view');
			}else{
				header('Location:/view/admin/app');
			}
		}

		public function _app_save(){
			$this->model['admin']->app_save();
			header('Location:/view');
		}

		public function _search(){
			$this->view->data['list'] = $this->model['admin']->search();
		}

		public function _lant(){
			$this->view->data['list'] = $ths->model['admin']->lant();
		}

		public function _admin_update(){
			$this->model['admin']->update();
			script('등록이 완료되었습니다.','return');
		}
	}