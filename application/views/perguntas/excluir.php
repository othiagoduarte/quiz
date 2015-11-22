<div class="container">
<div >
	<form  action="<?php echo base_url('perguntas/do_excluir')?>" method="POST" >
	 <div class="center"><h5> Excluir pergunta</h5></div>
	<?php include "detalhes.php"?>
		<div class="input-field col s3 offset-s3">
		<button class="btn waves-effect waves-light purple" type="submit" >Excluir
			<i class="material-icons"></i>
		</button>
		<a class="btn waves-effect waves-light purple lighten-1 " href="<?php echo base_url('perguntas')?>">Cancelar
			<i class="material-icons"></i>
		</a>              
	</div>
	</form>
</div>
</div>