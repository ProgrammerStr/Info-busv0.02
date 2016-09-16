<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Menssagem Enviada!!!</title>

    <script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">

	<link href='https://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/meuEstilo.css">
	
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

</head>
<body>

<?php
   
   $from = "gabriel.silva1401@etec.sp.gov.br";
   $assunto = "Messagem sobre INFO-BUS";
   $nome = $_POST['nome'];
   $email = $_POST['email'];
   $msg = $_POST['msg'];

      $corpo = "Messagem de ".$nome;
      $corpo .= "<br/>Email: ".$email;
      $corpo .= "<br/><br/>".$msg;


      $header = ("Content-Type: text/html; charset=utf-8");

 @mail($from, $assunto, $corpo, $header);
  
?>

  <!-- Painel de dialogo mostrado quando formulario de contato e enviado -->
    <div data-role="dialog" data-corners="false" data-dismissible="false">
      <center>
        <h1>Messagem enviada com sucesso!!!</h1>
        <h2>Responderemos assim que possivel!!!</h2>
        <a href="index.html" data-rel="back" data-role="button">Fechar</a>
      </center>
    </div>
    
</body>
</html>