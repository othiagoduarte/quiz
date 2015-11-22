<?php 
	if (! isset($detalhe_pergunta)) {$detalhe_pergunta  = new Pergunta();}
	if (! isset($detalhe_resposta1)){$detalhe_resposta1 = new Resposta();}
	if (! isset($detalhe_resposta2)){$detalhe_resposta2 = new Resposta();}
	if (! isset($detalhe_resposta3)){$detalhe_resposta3 = new Resposta();}
	if (! isset($detalhe_resposta4)){$detalhe_resposta4 = new Resposta();}

?>
<div class="container-fluid">
	<div class="row">
		<div class="row">
          <div class="input-field col s6">
			<input  id="fone" type="hidden" class="validate" name="id" value = "<?php echo $detalhe_pergunta->id ?>"  >
            <textarea id="pergunta" class="materialize-textarea" length="300" requerid name="pergunta"><?php echo $detalhe_pergunta->descricao?></textarea>
            <label for="pergunta">Digite a pergunta</label>
          </div>
        </div>
		<div class="row col-6">
			<div class="row">
				<div class="input-field col s6">
					<input  id="fone" type="hidden" class="validate" name="id_resposta1" value = "<?php echo $detalhe_resposta1->id ?>"  >
					<input placeholder="Digite a resposta certa" id="resposta1" type="text" length="100" class="validate" required name = "resposta1" value="<?php echo $detalhe_resposta1->descricao?>">
					<label for="resposta1">Resposta certa</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input  id="fone" type="hidden" class="validate" name="id_resposta2" value = "<?php echo $detalhe_resposta2->id ?>"  >
					<input   placeholder="Digite as outras respostas" id="resposta2" length="100" type="text" class="validate" required name ="resposta2" value="<?php echo $detalhe_resposta2->descricao?>">
					<label for="resposta2">Outras repostas</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input  id="fone" type="hidden" class="validate" name="id_resposta3" value = "<?php echo $detalhe_resposta3->id ?>"  >
					<input   placeholder="Digite as outras respostas" id="resposta3" length="100" type="text" class="validate" required name ="resposta3" value="<?php echo $detalhe_resposta3->descricao?>">
					<label for="resposta3">Outras repostas</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input  id="fone" type="hidden" class="validate" name="id_resposta4" value = "<?php echo $detalhe_resposta4->id ?>"  >
					<input   placeholder="Digite as outras respostas" id="resposta4" length="100" type="text" class="validate" required name="resposta4" value="<?php echo $detalhe_resposta4->descricao?>">
					<label for="resposta4">Outras repostas</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col s3">
				<label>Nivel de dificuldade</label>
				<select class="browser-default" name="nivel">
					<option value="0" disabled <?php echo ( 0 == $detalhe_pergunta->id_nivel) ? "selected" : "" ;  ?> >Selecione</option>
					<?php foreach ($lista_nivel as $item) : ?>
						<option value= "<?php  echo $item->id ?>";  
						<?php echo ($item->id == $detalhe_pergunta->id_nivel) ? "selected" : "" ;  ?> > 
						<?php echo $item->descricao; ?></option>
					<?php endforeach; ?>								  
				</select>				    		
			</div>
			<div class="input-field col s3">
				<input placeholder="Digite o assunto" id="assunto" type="text" length="30" class="validate" required name ="assunto"  value="<?php echo $detalhe_pergunta->assunto?>">
				<label for="assunto">Assunto</label>
			</div>
		</div>		
	</div>		
</div>