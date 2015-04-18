<?php

App::uses('AppController','Controller');

	class MySampleDatasController extends AppController {
		
		function find(){
			$this->layout = "Sample";
			$this->set("header_for_layout","Sample App");
			$this->set("footer_for_layout","copyright");
			
			if(isset($this->data['id'])){
				$id = $this->data['id'];	
				$status = array( 
					'conditions' =>
						array('MySampleData.id' => $id)
				);
				$data = $this->MySampleData->find('first',$status);
				
			}else{
				$data = null;
			}
			$this->set('data',$data);
			
		}
	}

