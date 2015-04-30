<?php
	$numeroIndicados = check_Referral_True($_SESSION['ID']);

	if (isset($_POST['submitIndica'])){

		criaReferral($_POST['emailIndica']);
	}

	//echo $GLOBALS["status"];
?>

<div style="height:550px;" class="col-md-12 bordaroxa">
	<div class="col-md-12">
		<div class="col-md-6 col-md-offset-3 text-center">
			<h3> PARABÉNS! Você já está participando no sorteio do <span class="rosa">Rabbit!</span></h3>
		</div>
		<div class="col-md-6 col-md-offset-3 text-center" style="margin-top:10px; margin-bottom:20px;">
			<h4><span class="rosa" style="font-weight: 100;"> Agora, que tal contar para seus amigos? Para cada amigo seu indicado, suas chances de ganhar no sorteio aumentam!</span></h4>
		</div>
		<div class="col-md-8 col-md-offset-3 text-center">
			<form class="form-horizontal" method="POST" action="<?php echo BASE_URL; ?>index.php" id="formIndica" name="formIndica">
				<div class="form-group">
					<div class="col-md-8">
					    <input type="email" class="form-control" id="emailIndica" name="emailIndica" placeholder=" Digite o Email do seu amigo" required="true">
					</div>	
					<div class="col-md-2">
					      <button type="submit" name="submitIndica" class="btn btn-default btn-block btn-custom">Indicar Amigo</button>
					</div>
				</div>
			</form>
		</div>
		<div class="row" style="margin-bottom:40px;">
			<div class="col-md-6 col-md-offset-3 text-center">
				<h4> Amigos Cadastrados:<span class="rosa"><b> <?php echo $numeroIndicados?></b></span></h4>
			</div>
		</div>

		<div class="col-md-6 col-md-offset-3 text-center">
			<h5> Caso deseje, você pode também utilizar o link abaixo para divulgar  aos seus amigos:</h5>
		</div>
		<div class="col-md-6 col-md-offset-3 text-center">
			<h4><span style="font-weight:bold;" class="lilas"><?php echo $_SERVER['HTTP_HOST'].'/ref/'.$_SESSION['ID'].'/';?></span></h4>
		</div>


		<div class="row">
			<div style="margin-top:50px;" class="col-md-offset-3 col-md-6 text-center">
				<div class="fb-like" data-href="https://www.facebook.com/essenciadoprazer1" data-layout="standard" data-action="like" data-show-faces="true" data-colorscheme="dark" data-share="false"></div>
			</div>
		</div>

	</div>
</div>