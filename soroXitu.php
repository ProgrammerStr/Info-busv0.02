<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Horarios Sorocaba</title>

    <script type="text/javascript" src="js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>

	<link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">

	<link href='https://fonts.googleapis.com/css?family=Share+Tech' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/meuEstilo.css">
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

</head>
<body>

  <div data-role="page">
  	
  	<div data-role="header" data-theme="b">
		<a href="index.html" data-role="button" data-icon="home" data-transition="slidedown">Inicio</a>
		<h3>Sorocaba ate Itu</h3>
		<a href="#saida" data-rel="popup" data-role="button" data-icon="clock" data-position-to="window" data-transition="flip">Proxima Saida</a>
	 </div>

	 <div data-role="content" data-theme="b">
 
 		<center>
 			<img src="img/icon3.png" alt="">
 			<h2>Dias Uteis</h2>
 		</center>

 		<table data-role="table" id="movie-table-custom" data-mode="reflow" class="movie-list" data-filter="true" data-filter-placeholder="Procurar....">
  		<thead>
    		<tr>
      			<th data-priority="1">Saida</th>
      			<th style="width:40%">Chegada Prevista</th>
    		</tr>
  </thead>

		<tbody>

			<?php

				$saidas = array("05:00", "05:45", "05:55", "06:15", "06:45", "07:30", "08:15" ,"09:15",
                                 "10:15", "11:15", "12:00", "13:15", "14:15", "15:15", "16:15", "17:00",
                                 "17:45", "18:30", "19:50", "21:00", "22:30");
                
                $chegadas = array("06:20", "07:05", "07:15", "07:35", "08:05", "08:50", "09:35", "10:35",
                	               "11:35", "12:35", "13:20", "14:35", "15:35", "16:35", "17:35", "18:20",
                	               "19:05", "20:00", "21:10", "22:20", "00:00");

				for($i = 0; $i < count($saidas); $i++)
				{
						echo "<tr>";
						echo "<td>".$saidas[$i]."</td>";
						echo "<td>".$chegadas[$i]."</td>";
						echo "</tr>";
				}

			?>

		  </tbody>
		  
	</table>

	 </div>

	<div data-role="footer" data-theme="b" data-position="fixed">
		<p><small>Copyrigth &copy - Gabriel de Padua</small></p>
	 </div>

      <!-- Tela para mostrar o horario da proxima saida comparando o horario do sistema -->
	 <div id="saida" data-role="popup" data-theme="b" data-corners="false" data-dismissible="false">
	 	<a href="#" data-rel="back" class="ui-btn ui-corner-all ui-shadow ui-btn-a ui-icon-delete ui-btn-icon-notext ui-btn-right">fechar</a>
	 	<div data-role="header" data-theme="a">
	 		<h1>O proximo onibus sai:</h1>
	 	</div>
	 	<div data-role="content" data-theme="b">
	 		<center><h1>XX:XX</h1></center>
	 	</div>
	 </div>

  </div>

	
</body>
</html>