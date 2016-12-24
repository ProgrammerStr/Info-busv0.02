<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Horários Sorocaba</title>

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
		<a href="horarios.html" data-role="button" data-icon="back" data-transition="slidedown">voltar</a>
		<h3>Sorocaba ate Itu</h3>
		<a href="#saida" data-rel="popup" data-role="button" data-icon="clock" data-position-to="window" data-transition="flip" onclick="horario()">Proxima Saída</a>
	 </div>

	 <div data-role="content" data-theme="b">
 
 		<center>
 			<img src="img/icon3.png" alt="">
 			<h2>Domingos e Feriados</h2>
 		</center>

 		<table data-role="table" id="movie-table-custom" data-mode="reflow" class="movie-list" data-filter="true" data-filter-placeholder="Procurar....">
  		<thead>
    		<tr>
      			<th data-priority="1">Saída</th>
      			<th style="width:40%">Chegada Prevista</th>
    		</tr>
  </thead>

		<tbody>

			<?php

				$saidas = array("05:00", "06:15", "07:30", "09:00" ,"10:15", "11:30", "12:45", "14:00", "15:15", "16:30", "17:45",
					             "19:30", "21:00", "22:30");
                
                $chegadas = array("06:20", "07:35", "08:50", "10:20", "11:35", "13:00", "14:05", "15:20", "16:35", "18:00",					       "19:05", "21:00", "22:20", "00:00");

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
	 		<h1>Próximo:</h1>
	 	</div>
	 	<div data-role="content" data-theme="b">
	 		<h1 id="prox"></h1>
	 		<center><img src="img/time.png" alt=""></center>
	 	</div>
	 </div>

  </div>
  
  <script type="text/javascript">
        
        var saidas = ["05:00", "06:15", "07:30", "09:00" ,"10:15", "11:30", "12:45", "14:00", "15:15", "16:30", "17:45",
					             "19:30", "21:00", "22:30"];
          
        function horario() {
            hoje = new Date();
            h = hoje.getHours();
            m = hoje.getMinutes();
            hm = h+":"+m;
            
            for(var i = 0; i < saidas.length; i++)
            {
               if (hm > saidas[saidas.length - 1]) {
                    document.getElementById('prox').innerHTML = saidas[0];
                    break;
                } else if (hm <= saidas[i]) {
                    document.getElementById('prox').innerHTML = saidas[i];
                    break;
                }
            }
            
            setTimeout('horario()', 1000);
        }
    </script>

	
</body>
</html>