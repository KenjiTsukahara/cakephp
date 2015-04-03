<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
 
class SampleController extends AppController {
 
  public function index() {

	$this->modelClass = null;
	if($this->request->data){
		
		$result = Sanitize::stripAll($this->request->data['text1']);	} else {
		$result = "no data";
	}
		$this->set("result",$result);

  }	

 
  public function form() {
    $text1 = $this -> data["text1"];
    $check1 = isset($this -> data["check1"]) ? 
      "On" : "Off";
    $radio1 = $this -> data["radio1"];
    $this -> set("text1", Sanitize::stripAll($text1));
    $this -> set("check1", $check1);
    $this -> set("radio1", $radio1);
  }
}
