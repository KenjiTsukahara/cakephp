<?php

App::uses('AppController','Controller');

	class MySampleDatasController extends AppController {
		
		function index(){
			$this->layout = "Sample";
			$this->set("header_for_layout","Sample App");
			$this->set("footer_for_layout","copyright");
			$datas = $this->MySampleData->find('all');
			$this->set('datas',$datas);
		}
	}

