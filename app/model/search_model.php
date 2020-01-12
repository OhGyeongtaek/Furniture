<?php
	class searchModel extends model{
		public function getList(){
			$sql = 'SELECT * FROM `gagu`
						WHERE `name` LIKE "%'.$_GET['key'].'%" AND
							  `type` != ?';
			return $this->resultAll($sql,array('stand'));
		}
	}