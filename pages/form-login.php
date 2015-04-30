 <form class="form-inline" method="POST" action="<?php echo BASE_URL; ?>home">
				  <div class="form-group">
				    <label class="control-label" for="exampleInputEmail3">E-mail</label>
				    <input type="email" class="form-control" id="emailLogin" name="emailLogin" required="true" placeholder="Digite seu email">
				  </div>
				  <div class="form-group">
				    <label class="control-label" for="exampleInputPassword3">Senha</label>
				    <input type="password" class="form-control" id="passwordLogin" name="passwordLogin" required="true" placeholder="Digite sua senha">
				  </div>
				  <button type="submit" name="submitLogin" class="btn btn-default">Entrar</button>
				</form>