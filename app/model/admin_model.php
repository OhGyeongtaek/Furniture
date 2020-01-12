<?php
	class adminModel extends model{

		public function app_save(){
			$sql = 'INSERT INTO `gagu` SET
						`why` = ?,
						`name` = ?,
						`date` = ?,
						`make` = ?,
						`type` = ?';

			$this->query($sql,array(	$_POST['why'],
										$_POST['name'],
										$_POST['date'],
										$_POST['make'],
										'ok'));
		}
		
		public function search(){
			$sql = 'SELECT * FROM `gagu` WHERE `type` = ?';
			return $this->resultAll($sql, array('stand'));
		}

		public function lant(){
			$sql = 'SELECT * FROM `gagu` WHERE `type` != ?';
			return $this->resultAll($sql,array('stand'));
		}

		public function update(){
			$sql = 'UPDATE `gagu` SET `type` = ? WHERE `idx` = ?';
			$this->query($sql,array('ok',$_GET['idx']));
		}
	}