<?php
App::uses('AppController', 'Controller');

class SampleController extends AppController {

	public function index(){
		$this-> autoRender = false;
	}
	
	public function other(){

		$this-> autoRender = false;
         echo "<html><head></head><body>";
         echo "<h1>サンプルpage</h1>";
         echo "</body></html>";

	}
}
