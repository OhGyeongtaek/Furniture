<?php
	class serviceModel extends model{
		public function id_chk(){
			$sql = 'SELECT COUNT(*) AS cnt FROM `user` where `id` = ?';
			$data = $this->result($sql,array($_GET['id']));
			echo $data['cnt'];
		}

		public function join_save(){
			$sql = ' INSERT INTO `user` SET
						`id` = ?,
						`pw` = ?,
						`name` = ?,
						`mail` = ?,
						`sex` = ?,
						`address` = ?,
						`tel` = ?,
						`phone` = ?';

			$this->query($sql, array(	$_POST['id'],
										md5(sha1(md5($_POST['pw']))),
										$_POST['name'],
										$_POST['mail'],
										$_POST['sex'],
										$_POST['address'],
										$_POST['tel'],
										$_POST['phone']));
		}

		public function login(){
			$sql = 'SELECt COUNT(id) as cnt,pw FROM `user` WHERE id = ? AND pw = ? ';	
			$data = $this->result($sql,array($_POST['id'],md5(sha1(md5($_POST['pw'])))));
			return $data;
		}
		
		public function app_save(){
			if(empty($_POST)) header('Location:/view');

			$sql = 'INSERT INTO `gagu` SET
						`name` = ?,
						`make` = ?,
						`why` = ?,
						`type` = ?';

			$this->query($sql,array(	$_POST['name'],
										$_POST['make'],
										$_POST['why'],
										'stand'));
		}

		public function reserve_data(){
			$sql = 'SELECt *,r.idx AS r_idx, g.idx AS g_idx
					FROM `reserve` AS r
					JOIN `gagu` g ON g.idx = r.p_idx
					WHERE user = ?';
			$user = $this->resultAll($sql,array($_SESSION['id']));

			$sql = 'SELECT * FROM `gagu` WHERE type != ?';
			$list = $this->resultAll($sql,array('stand'));

			return [$user,$list];
		}

		public function lanting(){
			$sql = 'INSERT INTO `reserve` SET 
							`user` = ?,
							`p_idx` = ?,
							`date` = NOW()';

			$this->query($sql,array($_SESSION['id'],
									$_GET['idx']));

			$sql = 'UPDATE `gagu` SET type = ? WHERE idx = ?';

			$this->query($sql,array('lanting',$_GET['idx']));
		}

		public function p_return(){
			$sql = 'UPDATE `gagu` SET type = ? WHERE idx = ?';
			$this->query($sql,array('ok',$_GET['idx']));

			$sql = 'DELETE FROM `reserve` WHERE idx = ?';
			$this->query($sql,array($_GET['r_idx']));
		}
	}