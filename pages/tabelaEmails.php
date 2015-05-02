<?php
		if(isset($_POST['submitEvento']) and $_SESSION['logado']){
		$array = importCSV($_FILES['nomeFile']['tmp_name']);

		$_SESSION['csvData'] = $array;
		$_SESSION['csvSize'] = (count($array));

			if(isset($_POST['nomeEvento']) and isset($_POST['dataEvento']) and isset($_POST['duracaoEvento']) and isset($_POST['localEvento']))
					insereEvento($_SESSION['ID'],$_POST['nomeEvento'],$_POST['dataEvento'],$_POST['duracaoEvento'],$_POST['localEvento']);

		}

		else
			die("Acesso Restrito");

	echo '<div class="page-header" style="margin-top:80px;">
  	<h1>Dados do Evento</h1>
	</div>';
	echo'
	<div class="form-group row">
		<div class="col-md-12">
			<h3><b>'.$_POST['nomeEvento'].'</b></h3>
			<b>Data do Evento: </b> '.$_POST['dataEvento'].'.
			<br>
			<b>Duração: </b> '.$_POST['duracaoEvento'].' horas.
			<p></p>
			<div class="col-md-4 pull-right">
				<a class="btn btn-info btn-lg" href="'.BASE_URL.'certificado/0/0" role="button" target="_blank">Visualizar Certificado</a>
			</div>
		</div>
	</div>	

	';
	echo '<div class="form-group row">';
	echo '<div class="col-md-12">';
	echo '<table class="table table-striped"><tr><th>Participante</th><th>E-mail</th></tr>';

	if($_SESSION['csvSize']>0){
		for($i=1;$i<$_SESSION['csvSize'];$i++)
		{
				echo "<tr>";
				echo "<td>".$array[$i][0]."</td>";
				echo "<td><a href='mailto:".$array[$i][1]."'>".$array[$i][1]."</td></a>";
				echo "</tr>";
		}
	}
	echo '</table></div></div>';

?>

<div class="col-md-12">
	<div class="col-md-12">
		<form class="form-horizontal" method="POST" action="<?php echo BASE_URL; ?>envio" id="formCadastro" name="formCadastro">
			<div class="form-group">
				<div class="col-md-4 col-md-offset-3">
					<button type="submit" name="submitEnvio" class="btn btn-lg btn-success btn-block">ENVIAR!</button>
				</div>
			</div>
		</form>
	</div>
</div>