<?php
	
		$data_evento = dadosEvento($_GET['id_evento']);

		if(isset($_SESSION['logado']) and $_SESSION['ID']==$data_evento['ID_owner'] and isset($_POST['submitParticipante'])){
			insereParticipante2($_POST['nomeParticipante'],$_POST['emailParticipante'],$_GET['id_evento']);
			
			header('Location: ' . $_SERVER['HTTP_REFERER']);

			exit;
		}

		else
			echo "NO WE CANT";

?>