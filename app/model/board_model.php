<?php
	class boardModel extends model{
		public function getList(){
			$page = empty($_GET['page'])? 0 : $_GET['page'] * 5;
			$sql = 'SELECt * FROM `board` ORDER BY `idx` DESC LIMIT '.$page.',5 ';
			return $this->resultAll($sql);
		}

		public function save(){
			$sql = 'INSERT INTO `board` SET
							`title` = ?,
							`name` = ?,
							`day` = NOW(),
							`text` = ?';

			$this->query($sql,array(	$_POST['title'],
										$_SESSION['id'],
										$_POST['text']));
		}
	}