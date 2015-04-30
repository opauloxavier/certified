<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head> 
	<title><?php echo SITE_TITLE; ?></title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
	
	<link rel="stylesheet" type="text/css" href="<?=ST_PATH?>css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="<?=ST_PATH?>css/custom.css" />
	<script type="text/javascript" src="<?=ST_PATH?>js/bootstrap.js"></script>
	<link rel="shortcut icon" href="http://pauloxavier.com/wp-content/uploads/2015/01/favicon.png" type="image/x-icon">
</head>
<body style="background-color:#EEE;">
<div id="wrapper" class="container">

	<div class="container">
		<div class="col-md-4 col-md-offset-4">
			<form class="form-signin" action="">
				<h2 class="form-signin-heading">
					Please Sign in
				</h2>		
				<input id="inputEmail" class="form-control" type="email" required="true" placeholder="Insert your email"></input>
				<input id="inputPassword" class="form-control" type="password" required="true" placeholder="Insert your password"></input>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="Remember-me">Remember-me
					</label>
				</div>
				<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
			</form>
		</div>
	</div>
</div>
</div>
</body>
</html>