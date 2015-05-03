<?php 

		$id_evento = $_GET['id_evento'];
		$mysqli=connect_db();
		$result= mysqli_query($mysqli,"SELECT * FROM px_templates WHERE ID_evento='$id_evento'");
		
		$num = mysqli_num_rows($result);

		if($num>0){
			if(isset($_POST['submitEnvio']) and $_SESSION['logado']){

			$data_participantes = participantesEvento($_GET['id_evento']);

			$data_evento = dadosEvento($_GET['id_evento']);

			$participantes = mysqli_fetch_all($data_participantes);

			$num = mysqli_num_rows($data_participantes);

			//print_r($participantes);

			for($i=0;$i<$num;$i++){
					enviaMail($participantes[$i][4],$participantes[$i][3].' , seu certificado está pronto!',$data_evento['nome_evento'],reSanitizeDate($data_evento['data_evento']),$data_evento['uuid'],$participantes[$i][5]);
			}

				header('Location: ' . $_SERVER['HTTP_REFERER']);
			}

			else
				echo "deu ruim";
		}
		else
			echo "Não é possivel enviar certificados nesse evento!";

?>