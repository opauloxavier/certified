<?php if( !isset($_SESSION) ){ session_start(); }
	if(isset($_GET['particip']) and isset($_GET['evento']))	
		geraPdf('framework/template/pdf/certificado.html');

	else 
		echo "Link invalido";
?>