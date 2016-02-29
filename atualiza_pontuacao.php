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
$castor=$_GET['castor'];
$morcego=$_GET['morcego'];
$phoenix=$_GET['phoenix'];
$comment=$_GET['comment'];
$data = date("Y-m-d") ;
$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));

$castorIncremento = $castor;
$morcegoIncremento = $morcego;
$phoenixIncremento = $phoenix;

$castorAnterior = $row_score[0];
$morcegoAnterior = $row_score[1];
$phoenixAnterior = $row_score[2];

$castor = $castor + $castorAnterior;
$morcego = $morcego + $morcegoAnterior;
$phoenix = $phoenix + $phoenixAnterior;
$sql = "INSERT INTO `pontuacao`(`castor`, `morcego`, `phoenix`, `data`) VALUES ('$castor','$morcego','$phoenix','$data')";
mysqli_query($conn,$sql);
$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));
mysqli_close($conn);

$_SESSION['castor'] = $castor;
$_SESSION['morcego'] = $morcego;
$_SESSION['phoenix'] = $phoenix;
$_SESSION['comment'] = $comment;
$_SESSION['data'] = $data;
?>

<h3>Pontuacao atualizada</h3>
<form method="get" action="./quadroDePontuacao.php"> 
	Data da última atualização: <?php echo $row_score[3] ?>
	<h2>Castor</h2>
	Valor anterior: <?php echo $castorAnterior ?><br>
	Atualização: <?php echo $castorIncremento ?><br>
	Valor atual: <?php echo $castor ?><br>
	
	<h2>Morcego</h2>
	Valor anterior: <?php echo $morcegoAnterior ?><br>
	Atualização: <?php echo $morcegoIncremento ?><br>
	Valor atual: <?php echo $morcego ?><br>
	
	<h2>Phoenix</h2>
	Valor anterior: <?php echo $phoenixAnterior ?><br>
	Atualização: <?php echo $phoenixIncremento ?><br>
	Valor atual: <?php echo $phoenix ?><br>
	<br>
	<br>
   <input type="submit" value="Voltar">
</form>
</body>
</html>