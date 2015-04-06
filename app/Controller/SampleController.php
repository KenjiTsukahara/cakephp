<?php

App::uses('AppController', 'Controller');
App::uses('Sanitize', 'Utility');
 
class SampleController extends AppController {
 
  public function index() {

	$this->modelClass = null;
	$this->layout = "Sample";
	$this->set("header_for_layout","Sample App");
	$this->set("footer_for_layout","copy 2015");
	$this->set("msg","welcome");
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
