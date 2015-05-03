<?php

	if(isset($_GET['id_evento']) and $_SESSION['logado']){
		$data_evento = dadosEvento($_GET['id_evento']);
	}

	else
		die ("Mete o pé");
?>

	<div class="page-header" style="margin-top:80px;">
  		<h1>Dados do Evento</h1>
	</div>
	<div class="form-group">
		<div class="col-md-12">
			<h3><b><?php echo $data_evento['nome_evento'];?></b></h3>
			<b>Data do Evento: </b> <?php echo reSanitizeDate($data_evento['data_evento']);?>.
			<br>
			<b>Duração: </b> <?php echo $data_evento['tempo_evento'];?> horas.
			<p></p>
		</div>
	</div>

	<div class="col-md-12">
		<div class="pull-right">
			<form class="form-inline" method="POST" action="<?php echo BASE_URL.'import/'.$_GET['id_evento']; ?>" id="formCsv" name="formCsv" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="form-group">
						<label class="control-label">Importar CSV</label>
						<input type="file" class="form-control" id="nome" name="nomeFile" placeholder="Escolha seu arquivo" required="true">
				</div>
				<div class="form-group">
						<button type="submit" name="submitCSV"style="color:white;" class="btn btn-default btn-primary">Importar</button>
				</div>
			</form>
		</div>
		<div class="pull-left">
			<form class="form-inline" method="POST" action="<?php echo BASE_URL.'inserir/'.$_GET['id_evento'];?>" id="formCsv" name="formParticipante" accept-charset="utf-8" enctype="multipart/form-data">
				<div class="form-group">
						<label class="control-label" for="exampleInputEmail3">Nome</label>
				    <input type="text" class="form-control" name="nomeParticipante" required="true" placeholder="Digite o email">
				</div>

				<div class="form-group">
						<label class="control-label" for="exampleInputEmail3">E-mail</label>
				    <input type="email" class="form-control" name="emailParticipante" required="true" placeholder="Digite o email">
				</div>
				<div class="form-group">
						<button type="submit" name="submitParticipante" style="color:white;" class="btn btn-default btn-primary">Inserir</button>
				</div>
			</form>
		</div>
	</div>
		
</div>
	<div class="form-group">
		<div class="col-md-12">
		<table class="table table-striped" style="margin-top:15px;"><tr><th>Participante</th><th>E-mail</th><th style='text-align:center;'>Excluir</th></tr>	

<?php	

	$resultado=participantesEvento($_GET['id_evento']);
	
	$data_participantes = mysqli_fetch_all($resultado);

	$num_participantes = mysqli_num_rows($resultado);

		for($i=0;$i<$num_participantes;$i++)
		{
				echo "<tr>";
				echo "<td>".$data_participantes[$i][3]."</td>";
				echo "<td><a href='mailto:".$data_participantes[$i][4]."'>".$data_participantes[$i][4]."</td></a>";
				echo "<td style='text-align:center;'><a href='".BASE_URL."remover/".$_GET['id_evento']."/".$data_participantes[$i][0]."' style='display:block; color:red; text-decoration:none; cursor:pointer;' class='glyphicon glyphicon-remove' aria-hidden='true'></a></td>";
				echo "</tr>";
		}
?>

</table></div></div>


<div class="row" style="margin-bottom:10px;">
	<div class="col-md-2 col-md-offset-3 pull-right">
		<form class="form-horizontal" method="POST" name="formEnvio" action="<?php echo BASE_URL.'envio/'.$_GET['id_evento']; ?>">
					<button type="submit" name="submitEnvio" style="color:white;" class="btn btn-lg btn-success btn-block">Enviar</button>
		</form>
	</div>
</div>
