<?php	
	class service extends controller{
		public function _service(){
			header('Location:/view/service/join');
		}

		public function _join(){
			if(isset($_SESSION['id'])) header('Location:/view');
		}

		public function _id_chk(){
			$this->model['service']->id_chk();
		}

		public function _join_save(){
			$this->model['service']->join_save();
			script('회원가입이 완료되었습니다.','url','/view/');
		}

		public function _login_ok(){
			$data = $this->model['service']->login();
			echo $data['cnt'];
			if($data['cnt']){
				$_SESSION['id'] = $_POST['id'];
				header('Location:/view');
			}else{
				script('아이디와 비밀번호를 확인해주세요.','return');
			}
		}

		public function _logout(){
			unset($_SESSION['id']);
			header('Location:/view');
		}
		
		public function _app_save(){
			$this->model['service']->app_save();
			script('등록이 완료되었습니다.','return');
		}

		public function _reserve(){
			if(empty($_SESSION['id'])) header('Location:/view');
			$data = $this->model['service']->reserve_data();
			$this->view->data['user'] = $data[0];
			$this->view->data['list'] = $data[1];
		}

		public function _lanting(){
			if(empty($_SESSION['id'])) header('Location:/view');
			$this->model['service']->lanting();
			script('대여가 완료되었습니다','return');
		}

		public function _return(){
			if(empty($_SESSION['id'])) header('Location:/view');
			$this->model['service']->p_return();
			script('반납완료','return');
		}
	}