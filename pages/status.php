<?php
	
	if(isset($_GET['error'])){
		switch($_GET['error']){
			case 0:
				break;
			case 1:
				$alertClass="alert-danger";
				$textoAlerta="Usuário Inexistente!";
				break;
			case 2:
				$alertClass="alert-danger";
				$textoAlerta="Senha incorreta!";
				break;
			case 4:
				$alertClass="alert-success";
				$textoAlerta="Referral/Email criado com sucesso!";
				break;
			case 5:
				$alertClass="alert-danger";
				$textoAlerta="Você já criou esse referral!";
				break;
			case 6:
				$alertClass="alert-danger";
				$textoAlerta="Usuário já cadastrado!";
				break;
		}

		if(isset($alertClass) and isset($textoAlerta))
			displayAlerta($alertClass,$textoAlerta,$_GET['error']);
	}

	

?>