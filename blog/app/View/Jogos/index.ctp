<h1>Posts do Blog</h1>
<p>
<?php echo $this->Html->link('Adicionar Jogo', 
	array('controller' => 'jogos', 'action' => 'add'), 
	array('class' => 'btn btn-success'));?>
</p>
<table class="table table-hover">
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Plataforma</th>
        <th>Genero</th>
        <th>Data de Criação</th>
        <th>Modificado em:</th>
        <th>Ação</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($jogos as $jogo): ?>
    <tr>
        <td><?php echo $jogo['Jogo']['id']; ?></td>
        <td><?php echo $this->Html->link($jogo['Jogo']['titulo'], 
        		array('controller' => 'jogos', 'action' => 'view', $jogo['Jogo']['id'])); ?></td>
        <td><?php echo $this->Html->link($jogo['Jogo']['plataforma'], 
        		array('controller' => 'jogos', 'action' => 'view', $jogo['Jogo']['id'])); ?></td>
        <td><?php echo $this->Html->link($jogo['Jogo']['genero'], 
        		array('controller' => 'jogos', 'action' => 'view', $jogo['Jogo']['id'])); ?></td>
        <td><?php echo $jogo['Jogo']['created']; ?></td>
        <td><?php echo $jogo['Jogo']['modified']; ?></td>
        <td><?php echo $this->Html->link('Visualizar', 
        		array('controller'=>'jogos', 'action' => 'view', $jogo["Jogo"]["id"]), 
        		array('class' => 'btn'))?></td>
        <td><?php echo $this->Html->link('Editar', 
        		array('action' => 'edit', $jogo['Jogo']['id']), 
        		array('class' => 'btn btn-primary'));?></td>
        <td><?php echo $this->Form->postLink('Deletar', 
        		array('action' => 'delete', $jogo['Jogo']['id']), 
        		array('class' => 'btn btn-primary'))?></td>
    </tr>
    <?php endforeach; ?>

</table>