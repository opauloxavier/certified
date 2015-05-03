<?php if( !isset($_SESSION) ){ session_start(); }

	require_once('framework/core/functions.php');

	if(isset($_SESSION["nome"])){
		$_SESSION['logado'] = true;
	}

	else{
		$_SESSION['logado'] = false;
	}

	if (isset($_POST['submitLogin'])){
		entrarSistema($_POST['emailLogin'],$_POST['passwordLogin']);
	}
	


	
	require_once 'vendor/autoload.php';

	include_once THEME_URL."header.php";

	//include_once PAGES_URL."featured.php";

	include_once PAGES_URL."status.php";

	if(isset($_GET['to'])){
		if($_GET['to']=='home'){
			include_once PAGES_URL."gerar.php";
		}

		elseif($_GET['to']=='logout'){
			include_once PAGES_URL."logout.php";
		}

		elseif($_GET['to']=='certificado'){
			include_once PAGES_URL."certificado.php";
		}

		elseif($_GET['to']=='tabela'){
			include_once PAGES_URL."tabelaEmails.php";
		}

		elseif($_GET['to']=='error'){
			include_once PAGES_URL."gerar.php";
		}

		elseif($_GET['to']=='envio'){
			include_once PAGES_URL."envio.php";
		}

		elseif($_GET['to']=='evento'){
			include_once PAGES_URL."evento.php";
		}

		elseif($_GET['to']=='import'){
			include_once PAGES_URL."import.php";
		}

		elseif($_GET['to']=='remover'){
			include_once PAGES_URL."remover.php";
		}


		else{
			header("location:".BASE_URL);
		}

	}
	
	else{
		include_once PAGES_URL."gerar.php";
	}


	include_once THEME_URL."footer.php";

?>
