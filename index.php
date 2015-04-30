<?php if( !isset($_SESSION) ){ session_start(); }
	
	require_once('framework/core/functions.php');

	
	require_once 'vendor/autoload.php';

	require_once 'framework/sdk/analyticstracking.php';

	require_once 'framework/sdk/facebook.php';

	include_once THEME_URL."header.php";

	include_once PAGES_URL."featured.php";

	include_once PAGES_URL."status.php";

	if(isset($_GET['to'])){
		if($_GET['to']=='home'){
			include_once PAGES_URL."cadastro.php";
		}

		elseif($_GET['to']=='logout'){
			include_once PAGES_URL."logout.php";
		}

		elseif($_GET['to']=='teste'){
			include_once PAGES_URL."mail.php";
		}

		elseif($_GET['to']=='error'){
			include_once PAGES_URL."cadastro.php";
		}

		else{
			header("location:".BASE_URL);
		}

	}
	
	else{
		include_once PAGES_URL."cadastro.php";
	}


	include_once THEME_URL."footer.php";

?>
