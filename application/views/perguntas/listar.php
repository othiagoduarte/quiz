<div class="container conteudo" >
	<h4 class="center">Lista de perguntas</h4>
	<table  class="bordered " >
		<tr>
			<th>Nivel</th>
			<th>Assunto</th>
			<th>Trecho</th>
			<th>Visualizar</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		<?php foreach ($lista_perguntas as $item) : ?>
				<tr>
					<td> <?php echo $item['nivel'] ?></td>
					<td> <?php echo $item['assunto'] ?></td>
					<td> <?php echo $item['trecho'] ?></td>
					<td> <a class="btn-floating btn-small blue" href="<?php echo base_url('perguntas/detalhes/')."/".$item['id'] ?>" ><i  class="material-icons">toc</i></a></td>
					<td> <a class="btn-floating btn-small blue" href="<?php echo base_url('perguntas/editar')."/".$item['id'] ?>"  ><i  class="material-icons">mode_edit</i></a></td>
					<td> <a class="btn-floating btn-small red" href="<?php echo base_url('perguntas/excluir/')."/".$item['id'] ?>" ><i  class="material-icons">delete</i></a></td>					
				</tr>
		<?php endforeach; ?>
	</table>
	<div class="fixed-action-btn " style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large blue" href="<?php echo base_url('perguntas/inserir') ?>">
			<i class="large material-icons">add</i>
		</a>
	</div>
</div>