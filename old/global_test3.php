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
//$patrulha = 'Castor';
//&atualizacao = 10;

//Listar pontuação
$database_link='localhost';
$database_admin='root';
$database_pass='driver8';
$database_name='tropaescoteira';

$conn=mysqli_connect($database_link,$database_admin,$database_pass,$database_name);
if (!$conn) die("Não foi possivel conectar à base da pontuação"); 

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
}

//Deleta tabela
// $sql_delete_table = DELETE FROM 'pontuacao' WHERE 1;
?>
<div>
<br>
<br>
<br>
<br>
</div>


$patrol_2 = mysqli_fetch_array($result);
$patrol_3 = mysqli_fetch_array($result);
//$num_rows = mysql_num_rows($result);

$patrol_1_nome = $patrol_1["patrol"];
$patrol_1_pontuacao = $patrol_1["score"];
echo $patrol_1_nome;
echo $patrol_1_pontuacao;

$patrol_2_nome = $patrol_2["patrol"];
$patrol_2_pontuacao = $patrol_2["score"];
echo $patrol_2_nome;
echo $patrol_2_pontuacao;

$patrol_3_nome = $patrol_3["patrol"];
$patrol_3_pontuacao = $patrol_3["score"];
echo $patrol_3_nome;
echo $patrol_3_pontuacao;
?>
$score = 20;
$insert_sql = "INSERT INTO 'pontuacao'('patrol', 'score') VALUES ('Morcego',$score)";
mysqli_query($conn,$insert_sql);

$score = 30;
$insert_sql = "INSERT INTO 'pontuacao'('patrol', 'score') VALUES ('Phoenix',$score)";
mysqli_query($conn,$insert_sql);



$query="UPDATE tabela_clientes SET nome='$nome', local='$local', andar='$andar', sala='$sala', telefone='$telefone', tipo_salada='$tipo_salada', quantidade='$quantidade', quant_salada='$quant_salada',observacoes='$observacoes', soja='$soja', visa_vale='$visa_vale', horario='$horario' WHERE nome LIKE '$nome'";
		
$result = mysqli_query($conn,$query);
echo mysqli_affected_rows($conn);
?>

</body>
</html>