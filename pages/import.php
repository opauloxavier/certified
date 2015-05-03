<?php

		if(isset($_POST['submitCSV']) and $_SESSION['logado']){
		$array = importCSV($_FILES['nomeFile']['tmp_name']);

		$num_particip=(count($array));

		$data_evento = dadosEvento($_GET['id_evento']);

		for($i=1;$i<$num_particip;$i++){
			insereParticipante($data_evento['ID_owner'],$_GET['id_evento'],$array[$i][0],$array[$i][1]);
		}
			header('Location: ' . $_SERVER['HTTP_REFERER']);
			exit;
		}

		else
			echo "deu ruim";

?>