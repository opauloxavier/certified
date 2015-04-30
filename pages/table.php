<?php
	echo '<div class="form-group row">';
	echo '<div class="col-md-12">';
	echo '<table class="table"><tr><th>Nome</th><th>E-mail</th></tr>';

	if($total>0){
		do{
			echo "<tr>";
			echo "<td>".$linha['nome']."</td>";
			echo "<td><a href='mailto:".$linha['email']."'>".$linha['email']."</td></a>";
			echo "</tr>";

	}while($linha = mysql_fetch_assoc($dados));
}
	echo '</table></div></div>';

?>