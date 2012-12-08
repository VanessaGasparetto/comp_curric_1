<h1>Editando Jogo</h1>
<?php
    echo $this->Form->create('Jogo', array('action' => 'edit'));
    echo $this->Form->input('titulo');
    echo $this->Form->input('plataforma');
	echo $this->Form->input('genero');
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Salvar');