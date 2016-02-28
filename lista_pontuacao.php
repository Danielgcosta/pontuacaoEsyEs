<html>
<body>
<h1>Pontuação da Tropa Escoteira</h1>

<script>
function update_score(patrol,score)	{
	if (patrol.preco_ref.value=="") {
		alert ("Valor Inválido!");
		return false;
	}
	if (score.preco_ref.value=="0,00") {
		alert ("Valor Inválido!");
		return false;
	}
	if (campo.preco_ref.value=="0.00") {
		alert ("Valor Inválido!");
		return false;
	}
	return true;
}		

function update_score_table(patrol,score){

}	
</script>

<?php
require "./init.php";

$patrols=['Castor','Morcego','Phoenix'];
for($i=0;$i<3;$i++){
	$patrol = $patrols[$i];
	$select_sql = "SELECT * FROM `pontuacao` WHERE `patrol` LIKE '$patrol' ORDER BY `patrol` ASC";
	$result = mysqli_query($conn,$select_sql);
	$row = mysqli_fetch_array($result);
	$patrol_nome = $row["patrol"];
	$patrol_pontuacao = $row["score"];
	echo $patrol_nome;
	echo " ";
	echo $patrol_pontuacao;
	echo " ";
	?><br><?php
}
?>
</body>
</html>