<?php 
	if(isset($_GET['particip']) and isset($_GET['evento']))	
		validaCertificado($_GET['evento'],$_GET['particip']);
			//geraPdf('framework/template/pdf/certificado.html');

	else 
		include_once "404.php";
?>