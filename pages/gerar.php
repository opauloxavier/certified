<?php

	if(isset($_POST['submitCsv'])){
		$array = importCSV($_FILES['nomeFile']['tmp_name']);

		$_SESSION['csvData'] = $array;

		enviaMail('paulosevencg@gmail.com','Teste','bonus','bundinha');
	}

?>

<div class="col-md-12 bordaroxa temp-coelho img-responsive">
				<div class="col-md-12">
				<div class="col-md-8 col-md-offset-3">
					<h3>Insira os dados para geração do certificado!</h3>
				</div>

				<div class="col-md-12">
					<form class="form-horizontal" method="POST" action="<?php echo BASE_URL; ?>tabela/" id="formCsv" name="formCsv" accept-charset="utf-8" enctype="multipart/form-data">
					   <div class="form-group">
					   		<div class="col-md-6 col-md-offset-3">
					   			<legend> Digite os dados do seu evento</legend>
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
					    	<div class="col-md-9 row">
						    	<label class="control-label">Data do Evento</label>
						    	<input type="text" class="form-control" id="nome" name="dataEvento" placeholder="DD/MM/AAAA" required="true">
						    </div>
						    <div class="col-md-3">
						    	<label class="control-label">Duração do Evento</label>
						    	<input type="number" class="form-control" min="0" id="nome" name="duracaoEvento" placeholder="Duração do seu evento" required="true">
					    	</div>
					    </div>
					  </div>

					  <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					    	<label class="control-label">Participantes do Evento</label>
					    	<input type="file" class="form-control" id="nome" name="nomeFile" placeholder="Escolha seu arquivo" required="true">
					    	 <p class="help-block">Aceito apenas arquivos no formato CSV.</p>
					    </div>
					  </div>
					  </div>
					  <div class="form-group">
					    <div class="col-md-6 col-md-offset-3">
					      <button type="submit" name="submitEvento" class="btn btn-lg btn-default btn-block">GERAR CERTIFICADOS!</button>
					    </div>
					  </div>
					</form>
				</div>
				</div>
				</div>