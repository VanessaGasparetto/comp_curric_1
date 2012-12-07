<h1>Adicionando Jogo</h1>
<?php
echo $this->Form->create('Jogo');
echo $this->Form->input('titulo');
echo $this->Form->input('plataforma');
echo $this->Form->input('genero');
echo $this->Form->end('Save Post');