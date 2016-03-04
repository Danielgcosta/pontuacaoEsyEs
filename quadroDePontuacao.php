<HTML>
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />

<head>
<TITLE>Atualização de pontuação numérica</TITLE>
<meta name="wot-verification" charset="utf-8" content='width=device-width, initial-scale=1,maximum-scale=2'; charset='utf-8'>
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

<form method="get" action="./atualiza_pontuacao.php">
<h2>Atualização da pontuação da tropa</h2>
<table style="width=80%">
<tr><td> Castor: </td>
	<td><input type="text" name="castor" value="<?php echo $castor;?>" style="width: 50px;"></td>
</tr>
<tr><td> Morcego: </td>
   <td> <input type="text" name="morcego" value="<?php echo $morcego;?>" style="width: 50px;"><br></td>
</tr>
<tr><td> Phoenix: </td>
   <td> <input type="text" name="phoenix" value="<?php echo $phoenix;?>" style="width: 50px;"><br></td>
</tr>
</table>
<table style="width=80%">
<tr><td>Commentários: </td></tr>
<tr><td><textarea name="comment" rows="15" style="width: 333px;"><?php echo $comment;?></textarea></td></tr>
</table>
<input type="submit" value="Adicionar Pontos">

</form>
</body>
</html>