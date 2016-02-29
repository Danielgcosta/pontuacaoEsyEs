<html>
<head>
<style>
.error {color: #FF0000;}
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;

    text-decoration: none;
    color: initial;
}
</style>
</head>
<body>

<?php
session_start();
require "./init.php";

//Atualizações
$castor=$_GET['$castor'];
$morcego=$_GET['$morcego'];
$phoenix=$_GET['$phoenix'];
$data = date("Y-m-d") ;

echo "Atualização requisitada:";?><br><?php
echo "Castor: ";?><?php
echo $castor;?><br><?php
echo "Morcego: ";?><?php
echo $morcego;?><br><?php
echo "Phoenix: ";?><?php
echo $phoenix;?><br><?php
echo "Data: ";?><?php
echo $data;?><br><br><?php


$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));

echo "Pontuação encontrada na base de dados:";?><br><?php
echo "Castor: ";?><?php
echo $row_score[0];?><br><?php
echo "Morcego: ";?><?php
echo $row_score[1];?><br><?php
echo "Phoenix: ";?><?php
echo $row_score[2];?><br><?php
echo "Data: ";?><?php
echo $row_score[3];?><br><br><?php

$castor = $castor + $row_score[0];
$morcego = $morcego + $row_score[1];
$phoenix = $phoenix + $row_score[2];

$sql = "INSERT INTO `pontuacao`(`castor`, `morcego`, `phoenix`, `data`) VALUES ('$castor','$morcego','$phoenix','$data')";
mysqli_query($conn,$sql);

echo "Pontuação atualizada";?><br><?php
echo "Castor: ";?><?php
echo $castor;?><br><?php
echo "Morcego: ";?><?php
echo $morcego;?><br><?php
echo "Phoenix: ";?><?php
echo $phoenix;?><br><br><?php

$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));

echo "Pontuação encontrada na base de dados:";?><br><?php
echo "Castor: ";?><?php
echo $row_score[0];?><br><?php
echo "Morcego: ";?><?php
echo $row_score[1];?><br><?php
echo "Phoenix: ";?><?php
echo $row_score[2];?><br><?php
echo "Data: ";?><?php
echo $row_score[3];?><br><br><?php

mysqli_close($conn);
?>

<h2>Pontuacao atualizada</h2>
<form method="get" action="./quadroDePontuacao.php"> 
   Castor: <input type="text" name="castor" value="<?php echo $castor;?>" style="width: 50px;">
   Morcego: <input type="text" name="morcego" value="<?php echo $morcego;?>" style="width: 50px;">
   Phoenix: <input type="text" name="phoenix" value="<?php echo $phoenix;?>" style="width: 50px;">
   <input type="submit" value="Voltar">
</form>
</body>
</html>