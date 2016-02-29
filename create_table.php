<?php
require "./init.php";

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