<!DOCTYPE HTML> 
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
$castor = $morcego = $phoenix = 0;
$comment = $data = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["castor"])) {
     $castor = 0;
   } else {
     $castor = test_input($_POST["castor"]);
	 // Permite somente números
     if (!preg_match("/-0123456789/",$castor)) {
       $castorErr = "Apenas números"; 
     }
   }
   if (empty($_POST["morcego"])) {
      $morcego = 0;
   } else {
     $morcego = test_input($_POST["morcego"]);
	 // Permite somente números
     if (!preg_match("/-0123456789/",$morcego)) {
       $morcegoErr = "Apenas números"; 
     }
   }
   if (empty($_POST["phoenix"])) {
     $phoenix = 0;
   } else {
     $phoenix = test_input($_POST["phoenix"]);
	 // Permite somente números
     if (!preg_match("/-0123456789/",$phoenix)) {
       $phoenixErr = "Apenas números"; 
     }
   }
   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$_SESSION['castor'] = $castor;
$_SESSION['morcego'] = $morcego;
$_SESSION['phoenix'] = $phoenix;
$_SESSION['comment'] = $comment;
$_SESSION['data'] = $data;
?>

<h2>Atualização da pontuação da tropa</h2>
<form method="get" action="./atualiza_pontuacao.php"> 
   Castor: <input type="text" name="castor" value="<?php echo $castor;?>" style="width: 50px;">
   Morcego: <input type="text" name="morcego" value="<?php echo $morcego;?>" style="width: 50px;">
   Phoenix: <input type="text" name="phoenix" value="<?php echo $phoenix;?>" style="width: 50px;">
   <br><br>
   Commentários: <textarea name="comment" rows="5" style="width: 240px;"><?php echo $comment;?></textarea>
   <br><br>
   <input type="submit" value="Adicionar Pontos">
</form>

<?php
if( $castor || $morcego || $phoenix || $comment || $data ){
	echo "<h2>Sua entrada:</h2>";
	if( $castor ){
		echo $castor;
		echo "<br>";
	}
	if( $morcego ){
		echo $morcego;
		echo "<br>";
	}
	if( $phoenix ){
		echo $phoenix;
		echo "<br>";
	}	
	if( $comment ){
		echo $comment;
		echo "<br>";
	}
	if( $data ){
		echo $data;
		echo "<br>";
	}
}
?>
</body>
</html>