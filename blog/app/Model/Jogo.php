<?php

class Jogo extends AppModel {
    // public $name = 'Post';
}

 $validate = array(
        'titulo' => array('rule' => 'notEmpty'),
        'plataforma' => array('rule' => 'notEmpty'),
		'genero' => array('rule' => 'notEmpty')
    );
