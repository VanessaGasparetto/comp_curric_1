<?php

	class JogosController extends AppController {
    public $helpers = array ('Html','Form');
    public $name = 'Jogos';
	
	function index() {
        $this->set('jogos', $this->Jogo->find('all'));
    }
	
	public function view($id = null) {
        $this->Jogo->id = $id;
        $this->set('jogo', $this->Jogo->read());
    }

	public function add() {
        if ($this->request->is('jogo')) {
            if ($this->Jogo->save($this->request->data)) {
                $this->Session->setFlash('Seu jogo foi Salvo!');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
	
	function edit($id = null) {
    $this->Jogo->id = $id;
    if ($this->request->is('get')) {
        $this->request->data = $this->Jogo->read();
    } else {
        if ($this->Jogo->save($this->request->data)) {
            $this->Session->setFlash('Seu jogo foi salvo!');
            $this->redirect(array('action' => 'index'));
        }
    }
}
	public function delete($id) {
		if (!$this -> request -> is('jogo')) {
			throw new MethodNotAllowedException();
		}
		if ($this -> Jogo -> delete($id)) {
			$this -> Session -> setFlash('O jogo com ID: ' . $id . ' Foi deletado.');
			$this -> redirect(array('action' => 'index'));
		}
	}
	
}