<?php
class HelloController extends AppController {
	//action
	//hello/index
 public function index(){
		$nomeCompleto =
 "Vanessa";
		$this->set('nome', $nomeCompleto);
	}
	
	// sobre mim
	public function sobremim(){
		
	}
	
	//contato
		public function contato(){
		
	}
	// teste
		public function teste(){
		
	}
}