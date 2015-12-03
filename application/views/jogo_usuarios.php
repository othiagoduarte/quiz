<div class="container conteudo" >
	<h4 class="center">Ranking</h4>
	<table  class="bordered " >
		<tr>
		    <th>#</th>
			<th>Nome</th>
			<th>Jogadas</th>
			<th>Pontos</th>
			
		</tr>
		<?php $id = 1; 
		 foreach ($lista_usuarios as $iten) : ?>
				<tr>
				    <td> <?php echo $id ?></td>
					<td> <i  class="material-icons">star_rate</i> <?php echo $iten->nome ?></td>
					<td> 2</td>
					<td> 299</td>
				</tr>
		<?php endforeach; $id += 1 ?>
	</table>
</div>
