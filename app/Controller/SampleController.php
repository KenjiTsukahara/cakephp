<?php
App::uses('AppController', 'Controller');

class SampleController extends AppController {

	public function index(){
	
	$this->set("title_for_layout","INDexpge");
	$this->set("msg","hello");
	$this->set("datas",array("One","two"));	
	}
	
	public function other(){

		$this-> autoRender = false;
         echo "<html><head></head><body>";
         echo "<h1>サンプルpage</h1>";
         echo "</body></html>";

	}
}
