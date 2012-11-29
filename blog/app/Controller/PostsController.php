<?php
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');
	// public $name = 'Posts';

	//action
	// /posts/index
	public function index() {
		$todasAsPostagens = $this -> Post -> find('all');

		//seta todas as postagens
		$this -> set('posts', $todasAsPostagens);
		// $this->set('posts', $this->Post->find('all'));
	}

	// posts/view/3
	public function view($id = null) {

		// setar o Post com id = 3
		$this -> Post -> id = $id;

		//procurar no banco o item com id 3
		$p = $this -> Post -> read();

		// enviando para a view os campos do item
		$this -> set('post', $p);
	}

	// /post/add
	public function add() {
		// se for enviado um Post pegar os dados do form e salvar no banco
		if ($this -> request -> is('post')) {
			$dadosDoFormulario = $this -> request -> data;
			//tentar salvar os dados no banco
			//se conseguir salvar, mostrar mensagem e redirecionar para o Index
			if ($this -> Post -> save($dadosDoFormulario)) {
				//mostrar a mensagem
				$this -> Session -> setFlash('A postagem foi inserida com sucesso');
				$this -> redirect(array('action' => 'index'));
			}
		}
	}

}
