<?php

		$data_evento = dadosEvento($_GET['id_evento']);


		if(isset($_SESSION['logado']) and $_SESSION['ID']==$data_evento['ID_owner']){
			removeParticipante($_GET['id_evento'],$_GET['id_participante']);

			header('Location: ' . $_SERVER['HTTP_REFERER']);

			exit;
		}

		else
			echo "NO WE CANT";
?>