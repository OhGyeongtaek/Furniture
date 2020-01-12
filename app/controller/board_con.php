<?php	
	class board extends controller{
		public function _board(){
			$this->view->data['list'] = $this->model['board']->getList();
		}

		public function _write(){
			if(empty($_SESSION['id'])){
				script('로그인을 해주세요.','url','/view/service/login');
			}
		}

		public function _board_save(){
			if(empty($_SESSION['id'])) script('잘못된 접근입니다.','url','/view/service/login');
			$this->model['board']->save();
			script('글작성이 완료되었습니다','url','/view/board/board');
		}
	}