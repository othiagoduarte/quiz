<div class="container conteudo" >
	<h4 class="center">Lista de usuarios</h4>
	<table  class="bordered " >
		<tr>
			<th>Nome</th>
			<th>Detalhe</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		<?php foreach ($lista_usuarios as $iten) : ?>
				<tr>
					<td> <?php echo $iten->nome ?></td>
					<td> <a class="btn-floating btn-small orange" href="<?php echo base_url('usuarios/detalhe?id=').$iten->id ?>" ><i  class="material-icons">toc</i></a></td>
					<td> <a class="btn-floating btn-small blue" href="<?php echo base_url('usuarios/editar?id=').$iten->id ?>"  ><i  class="material-icons">mode_edit</i></a></td>
					<td> <a class="btn-floating btn-small red" href="<?php echo base_url('usuarios/excluir?id=').$iten->id ?>" ><i  class="material-icons">delete</i></a></td>					
				</tr>
		<?php endforeach; ?>
	</table>
	<div class="fixed-action-btn modal-trigger  " style="bottom: 45px; right: 24px;">
		<a class="btn-floating btn-large">
			<i class="large material-icons" id="btnCadastrar">add</i>
		</a>
	</div>
	<!-- Modal Structure - Cadastrar Novo Usuario -->
	<div id="cadastrarUsuario" class="modal">
		<div class="modal-content">
			<?php include "inserir.php" ?>	
		</div>
	</div>
</div>