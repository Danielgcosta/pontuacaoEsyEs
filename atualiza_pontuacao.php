<?php
require "./init.php";

$patrol = 'Phoenix';
$atualizacao = 25;

//Pega valor atual
$server_name='localhost';
$mysql_user='root';
$mysql_pass='';
$db_name='tropaescoteira';
$conn=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if (!$conn){
	echo "Não foi possivel conectar à base da pontuação".mysqli_connect_error(); 
}
else
{
	echo "<h3>Conectado à base de dados com sucesso. </h3>";
}

$select_sql = "SELECT * FROM `pontuacao` WHERE `patrol` LIKE '$patrol' ORDER BY `patrol` ASC";
$result = mysqli_query($conn,$select_sql);
$row = mysqli_fetch_array($result);
$pontuacao = $row["score"];

//Atualiza
$pontuacao=$pontuacao+$atualizacao;
mysqli_query($conn,"DELETE FROM `pontuacao` WHERE `patrol` LIKE '$patrol'");
mysqli_query($conn,"INSERT INTO `pontuacao`(`patrol`, `score`) VALUES ('$patrol',$pontuacao)");
mysqli_close($conn);

echo "Pontuacao atualizada";
echo $pontuacao;
?>