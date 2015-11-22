<body class="teal">
	<div class="container-fluid ">
			<div class="row login col s12 m5">
				<br><br><br><br><br><br>
				<form class="card-panel z-depth-3" action="login/logar" method="POST"  >
					<h3 >Entrar</h3>
					<?php echo isset($_GET['err'])?'<p><b class"red">senha inválida</b></p>':'<p>Bem vindo</p>';?>
					<div class="row">
						<div class="input-field">
          					<i class="material-icons prefix">account_circle</i>
          					<input id="Usuario" type="text" class="validate" name="usuario">
          					<label for="Usuario">Usuario</label>
			        	</div>
					</div>
					<div class="row">
						<div class="input-field">
          					<i class="material-icons prefix">lock</i>
          					<input id="senha" type="password" class="validate" name="senha">
          					<label for="senha">Senha</label>
			        	</div>
					</div>
					<div class="row ">
						<div class="input-field ">
							<input class="btn purple" type="submit" value="Login" >                                
						</div>
					</div>
				</form>
			</div>
		</div>                        
</body>