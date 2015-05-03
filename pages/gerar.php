<?php

		if(isset($_POST['submitEvento']) and $_SESSION['logado']){
			$evento_id = insereEvento($_SESSION['ID'],$_POST['nomeEvento'],sanitizeDate($_POST['dataEvento']),$_POST['duracaoEvento'],$_POST['localEvento']);
			if($evento_id!=false)
				header("Location:evento/".$evento_id);
		}

?>

<div class="col-md-12 bordaroxa temp-coelho img-responsive">
				<div class="col-md-12">
				<div class="col-md-8 col-md-offset-3">
					<h3>Insira os dados para geração do certificado!</h3>
				</div>

				<div class="col-md-12">
					<form class="form-horizontal" method="POST" action="<?php echo BASE_URL; ?>index.php" id="formCsv" name="formCsv" accept-charset="utf-8" enctype="multipart/form-data">
					   <div class="form-group">
					   		<div class="col-md-6 col-md-offset-3">
					   			<legend> Etapa 1 - Criar seu Evento</legend>
					   		</div>
					    </div>
					   <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					   		<label class="control-label">Nome do Evento</label>
					    	<input type="text" class="form-control" id="nome" name="nomeEvento" placeholder="Digite o Nome do seu Evento" required="true">
					    </div>
					  </div>
					   <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					   		<label class="control-label">Local do Evento</label>
					    	<input type="text" class="form-control" id="local" name="localEvento" placeholder="Digite o Nome do seu Evento" required="true">
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					    	<div class="col-md-9 row">
						    	<label class="control-label">Data do Evento</label>
						    		<input type="text" class="form-control" id="data" name="dataEvento" placeholder="DD/MM/AAAA" required="true">
						    </div>
						    <div class="col-md-3">
						    	<label class="control-label">Duração do Evento</label>
						    	<input type="number" class="form-control" min="0" id="nome" name="duracaoEvento" placeholder="Horas" required="true">
					    	</div>
					    </div>
					  </div>
					  <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					      <button type="submit" name="submitEvento" style="color:white;" class="btn btn-lg btn-primary btn-block">Criar Evento!</button>
					    </div>
					  </div>
					</form>
				</div>
				</div>
				</div>