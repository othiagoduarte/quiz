  <div class="container ">
    <div class="row">
      <form  action="<?php echo base_url('perguntas/do_inserir')?>" method="POST" >
       <div class="center"><h5>Cadastrar Pergunta</h5></div>
        <?php include "detalhes.php"?>
        <div class="row">
          <div class="input-field col s4 offset-s8">
            <button class="btn waves-effect waves-light purple lighten-1" type="submit" >Salvar
              <i class="material-icons"></i>
            </button>
            <a class="btn waves-effect waves-light purple lighten-1 " href="<?php echo base_url('perguntas')?>">Cancelar
              <i class="material-icons"></i>
            </a>              
          </div>
         </div>
      </form>
    </div>
  </div>