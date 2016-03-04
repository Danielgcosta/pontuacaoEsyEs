<html>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<head>
<title>Pontuação atualizada</title>
<meta name="wot-verification" content='width=device-width, initial-scale=1,maximum-scale=2'; charset='utf-8'>

<style>
.error {color: #FF0000;}
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;

    text-decoration: none;
    color: initial;
}
</style>
</head>

<body>
<?php
require "./init.php";
header('Content-Type: text/html; charset=ISO-8859-1');

//Atualizações
$castorIncremento=$_POST['castor'];
$morcegoIncremento=$_POST['morcego'];
$phoenixIncremento=$_POST['phoenix'];
$comment=$_POST['comment'];
$data = date("Y-m-d") ;
$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `indice` DESC"));

$castorAnterior = $row_score[0];
$morcegoAnterior = $row_score[1];
$phoenixAnterior = $row_score[2];

$castor = $castorIncremento + $castorAnterior;
$morcego = $morcegoIncremento + $morcegoAnterior;
$phoenix = $phoenixIncremento + $phoenixAnterior;
?>

<script type="text/javascript">
var data = new Date("<?php echo $row_score[3]; ?>");
var dd = data.getDate()+1;
var mm = data.getMonth()+1;
var yyyy = data.getFullYear();
if(dd<10) {
	dd='0'+dd;
} 
if(mm<10) {
	mm='0'+mm;
}
data = dd+'/'+mm+'/'+yyyy;

function okCallback(option){
	if(option=="Aceitar"){
	<?php
	$sql = "INSERT INTO `pontuacao`(`castor`, `morcego`, `phoenix`, `data`) VALUES ('$castor','$morcego','$phoenix','$data')";
	mysqli_query($conn,$sql);
	?>
	}
	<?php
	mysqli_close($conn);
	?>
	return true;	
}
</script>

<div align="center">	
<h3>Revisão da entrada</h3>
	Data da Última atualização: <script type="text/javascript">document.write(data);</script>
	<h2>Castor</h2>
	<?php
	if( $castorIncremento != 0 ) { 
	?>
		Valor anterior: <?php echo $castorAnterior ?><br>
		Atualização: <?php echo $castorIncremento ?><br>
	<?php
	}
	?>	
	Valor atual: <?php echo $castor ?><br>
	
	<h2>Morcego</h2>
	<?php
	if( $morcegoIncremento != 0 ) { 
	?>
	Valor anterior: <?php echo $morcegoAnterior ?><br>
	Atualização: <?php echo $morcegoIncremento ?><br>
	<?php
	}
	?>		
	Valor atual: <?php echo $morcego ?><br>
	
	<h2>Phoenix</h2>
	<?php
	if( $phoenixIncremento != 0 ) { 
	?>	
	Valor anterior: <?php echo $phoenixAnterior ?><br>
	Atualização: <?php echo $phoenixIncremento ?><br>
	<?php
	}
	?>	
	Valor atual: <?php echo $phoenix ?><br>	
	<br>
	<br>
	

	<form action="./quadroDePontuacao.php" type="post">
		<?php
			if( $phoenixIncremento != 0 || $castorIncremento != 0 || $phoenixIncremento != 0  ) { 
		?>
		<input name="ok" type="submit" value="Aceitar" onSubmit="return okCallback(this)">
		<?php
			}
		?>
		<input name="cancel" type="submit" value="Cancelar" onSubmit="return okCallback(this)">
	</form>
	
</div>
</body>
</html>