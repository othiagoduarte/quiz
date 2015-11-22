	<div class="container-fluid conteudo">
   <div class="row">
    <div class="row">
      <br>
      <div class="center">
        <b>  <?php echo isset($mensagem)?$mensagem:"Editar os dados do usuario"; ?> <b>
      </div>
    </div>
     <form class="col s12" action="<?php echo base_url('usuarios/do_editar')?>" method="POST">
        <?php include "detalhe.php"?>
            <div class="input-field">
              <div class="col s3">
                <button class="btn waves-effect purple waves-light " type="submit" >Salvar
                  <i class="material-icons"></i>
                </button>
                <a class="btn waves-effect waves-light purple" href="<?php echo base_url('usuarios')?>">Cancelar
                  <i class="material-icons"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>