<html>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<head>
<title>Pontuação atualizada</title>
<meta name="wot-verification" charset="utf-8" content='width=device-width, initial-scale=1,maximum-scale=2'; charset='utf-8'>

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

<script type="text/javascript" language="JavaScript">
function acceptButtonCallback(){
	<?php
	$sql = "INSERT INTO `pontuacao`(`castor`, `morcego`, `phoenix`, `data`) VALUES ('$castor','$morcego','$phoenix','$data')";
	$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));
	$_SESSION['castor'] = $castor;
	$_SESSION['morcego'] = $morcego;
	$_SESSION['phoenix'] = $phoenix;
	$_SESSION['comment'] = $comment;
	$_SESSION['data'] = $data;
	mysqli_close($conn);
	?>
	window.location.href = "./quadroDePontuacao.php";
}

function cancelButtonCallback(){
	<?php mysqli_close($conn); ?>
	window.location.href = "./quadroDePontuacao.php";
}
</script>;
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
?>

<script type="text/javascript" language="JavaScript">
var data = new Date("<?php echo $row_score[3]; ?>");
var dd = data.getDate()+1;
var mm = data.getMonth()+1; //January is 0!
var yyyy = data.getFullYear();
if(dd<10) {
	dd='0'+dd;
} 
if(mm<10) {
	mm='0'+mm;
}
data = dd+'/'+mm+'/'+yyyy;
</script>;

<form name="action" method="post">	
<h3>Revisão da entrada</h3>
	Data da última atualização: <script type="text/javascript">document.write(data);</script>
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
	<input type="button" name="ok_button" value = "Aceitar" onClick="acceptButtonCallback()"/>
	<input type="button" name="cancel_button" value = "Cancelar" onClick="cancelButtonCallback()"/>
</form>

<?php
if(isset($_POST['Aceitar'])){
	$sql = "INSERT INTO `pontuacao`(`castor`, `morcego`, `phoenix`, `data`) VALUES ('$castor','$morcego','$phoenix','$data')";
	$row_score = mysqli_fetch_row(mysqli_query($conn,"SELECT * FROM `pontuacao` ORDER BY `data` DESC LIMIT 1"));
	$_SESSION['castor'] = $castor;
	$_SESSION['morcego'] = $morcego;
	$_SESSION['phoenix'] = $phoenix;
	$_SESSION['comment'] = $comment;
	$_SESSION['data'] = $data;
	mysqli_close($conn);
}
?>
</body>
</html>