<div class="center">
    <div class="row">
      <ul class="pagination">
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="<?php echo $pergunta->id == 1?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/1')?>">1</a></li>
        <li class="<?php echo $pergunta->id == 2?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/2')?>">2</a></li>
        <li class="<?php echo $pergunta->id == 3?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/3')?>">3</a></li>
        <li class="<?php echo $pergunta->id == 4?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/4')?>">4</a></li>
        <li class="<?php echo $pergunta->id == 5?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/5')?>">5</a></li>
        <li class="<?php echo $pergunta->id == 6?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/6')?>">6</a></li>
        <li class="<?php echo $pergunta->id == 7?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/7')?>">7</a></li>
        <li class="<?php echo $pergunta->id == 8?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/8')?>">8</a></li>
        <li class="<?php echo $pergunta->id == 19?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/19')?>">9</a></li>
        <li class="<?php echo $pergunta->id == 20?'active purple': 'waves-effect'; ?>"><a href="<?php echo base_url('jogar/pergunta/20')?>">10</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>  
    <div class="painel-card" >    
        <div class="col s12">
             <div class="row">
                <div class="col s12 m6">
                  <div class="card teal darken-1">
                    <div class="card-content white-text">
                      <span class="card-title">Questão - <?php echo  $pergunta->id.' - '.$pergunta->assunto; ?> </span>
                      <p> <?php echo $pergunta->descricao; ?></p>
                    </div>
                  </div>
                </div>
      </div>
    </div>
    <div class="row">
        <form action="#">
            <p>
              <input name="group1" type="radio" id="resposta_1" required />
              <label for="resposta_1">1)</label>
              <?php echo $respostas[0]->descricao?>
            </p>
            <p>
              <input name="group1" type="radio" id="resposta_2" />
              <label for="resposta_2">2) </label>
              <?php echo $respostas[1]->descricao?>
            </p>
                <p>
              <input name="group1" type="radio" id="resposta_3" />
              <label for="resposta_3">3) </label>
              <?php echo $respostas[2]->descricao?>
            </p>
            <p>
              <input name="group1" type="radio" id="resposta_4" />
              <label for="resposta_4">4) </label>
              <?php echo $respostas[3]->descricao?>
            </p>
            <div class="row">
                <div class="col s12">
                    <a class="waves-effect waves-light btn purple" href="<?php echo base_url('jogar/pergunta/19')?>" ><i class="material-icons left">fast_rewind</i>Voltar</a>
                    <a class="waves-effect waves-light btn purple" href="<?php echo base_url('jogar/pergunta/20')?>"><i class="material-icons right">fast_forward</i>Próximo</a>
                </div>
            </div>    
        </form>
    </div>
    
</div>
</div>