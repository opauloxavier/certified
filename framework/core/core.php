<?php
	date_default_timezone_set('Brazil/East');
	define('CONF_PATH','config/');
	define('PAGES_URL','pages/');

	define('SITE_TITLE','Certified');
	define('SITE_URL','http://www.certified.com.br/');
	define('THEME_URL','framework/template/default/');
	define('SOCIAL_FB','https://www.facebook.com/essenciadoprazer1?fref=ts');
	define('PROJECT_ALIAS','certified');

	//mail data
	define('MAIL_USERNAME','contato.pauloxavier@gmail.com');
	define('MAIL_PASSWORD','X-Gbkg0cJJHK8J4qcalA2w');
	define('MAIL_FROM','no-reply@pauloxavier.com');
	define('MAIL_FROM_NAME','Certified - Automação de Certificados');


	if($_SERVER['SERVER_NAME'] == 'dev.pauloxavier.com'){
		define("url",$_SERVER['SERVER_NAME']."/".PROJECT_ALIAS."/");
		define("db_table", "px_user");
		define("db_user","localhost");
		define("db_name","certified");
		define("db_login","root");
		define("db_password","");
		define('BASE_URL','http://dev.pauloxavier.com/'.PROJECT_ALIAS.'/');
		define('ST_PATH','http://'.$_SERVER['HTTP_HOST'].'/'.PROJECT_ALIAS.'/framework/assets/');
	}


	else{
		define("url","http://www.pauloxavier.com/certified/");
		define("db_table", "px_user");
		define("db_user","mysql");
		define("db_name","u538617697_cert");
		define("db_login","u538617697_admin");
		define("db_password","over5574");
		define('BASE_URL','http://www.pauloxavier.com/certified/');
		define('ST_PATH','http://'.$_SERVER['HTTP_HOST'].'/certified/framework/assets/');
	}
?>