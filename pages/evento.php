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
	<div class="form-group">
	 <form class="form-inline" method="POST" action="<?php echo BASE_URL; ?>import/<?php echo $_GET['id_evento']; ?>" id="formCsv" name="formCsv" accept-charset="utf-8" enctype="multipart/form-data">
	 			<div class="form-group pull-right">
				 <button type="submit" name="submitLogin" class="btn btn-primary">Importar Contatos</button>
				 </div>
				<div class="form-group pull-right">
					    <div class="col-md-12">
					    	<input type="file" class="form-control" name="nomeFile" placeholder="Escolha seu arquivo" required="true">
					    </div>
				</div>
	</form>

	</div>
	<div class="form-group">
		<div class="col-md-12">
		<table class="table table-striped" style="margin-top:15px;"><tr><th>Participante</th><th>E-mail</th></tr>	

<?php	

	$resultado=participantesEvento($_GET['id_evento']);
	
	$data_participantes = mysqli_fetch_all($resultado);

	$num_participantes = mysqli_num_rows($resultado);

		for($i=0;$i<$num_participantes;$i++)
		{
				echo "<tr>";
				echo "<td>".$data_participantes[$i][3]."</td>";
				echo "<td><a href='mailto:".$data_participantes[$i][4]."'>".$data_participantes[$i][4]."</td></a>";
				echo "</tr>";
		}
?>

</table></div></div>
<div class="col-md-12">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" name="formEnvio">
			<div class="form-group">
				<div class="col-md-4 col-md-offset-3">
					<button type="submit" name="submitEnvio" class="btn btn-lg btn-success btn-block">ENVIAR!</button>
				</div>
			</div>
		</form>
	</div>
</div>
