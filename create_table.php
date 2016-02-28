<?php
//Cria tabela
$server_name='mysql.hostinger.com.br';
$mysql_user='u337466288_root';
$mysql_pass='ArRNL8byll';
$db_name='u337466288_db';

$conn=mysqli_connect($server_name,$mysql_user,$mysql_pass,$db_name);
if (!$conn){
	echo "Não foi possivel conectar à base da pontuação".mysqli_connect_error(); 
}
mysqli_set_charset($conn, 'utf8mb4');

$counter = 0;
$score = 0;
$patrols=['Castor','Morcego','Phoenix'];
for($i=0;$i<3;$i++){
		mysqli_query($conn,"INSERT INTO `pontuacao`(`patrol`, `score`) VALUES ('$patrols[$i]',$score)");
		echo $patrols[$i];
		echo " ";
		echo $score;
		echo " ";
		$counter=$counter+1;
}
mysqli_close($conn);
echo $counter;
echo " patrulhas criadas na tabela"
?>