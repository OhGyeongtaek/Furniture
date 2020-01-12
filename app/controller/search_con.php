<?php
	class search extends controller{
		public function _search(){
			if(isset($_GET['key'])){
				$data = $this->model['search']->getList();
				$cnt = 0;
				foreach($data as $key => $val){
					$cnt += substr_count($val['name'],$_GET['key']);
					$data[$key]['name'] = str_replace($_GET['key'],'<span style="background:red">'.$_GET['key'].'</span>',$val['name']);
				}
				$this->view->data['data'] = $data;
			}
		}
	}