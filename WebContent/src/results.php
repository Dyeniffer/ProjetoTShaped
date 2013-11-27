

<?php

include "conexao.php";



?>

<!DOCTYPE html>

<head>
   <link href="bootstrap/css/datepicker.css" rel="stylesheet"
	media="screen" />

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">

    <title>T-Shaped Corporation LTDA</title>
	
<link href="dist/css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link href="css/footer2.css" rel="stylesheet">
  
  </head>

  <body>
  
 <?php
 $areavaga=$_POST['areavaga'];
 $busca=$_POST['busca'];
  ?>
 
 
 <?php
 if($areavaga == null) {
 echo "<center> Por favor Selecione uma Area a ser Pesquisada";
 echo "<br/>";
 echo "<a href='BuscaVagas.php'> Voltar </a>";
 exit();
 }
 
 ?>
 
  <?php
  $getvagas = "SELECT * FROM vagas WHERE areavaga_id='$areavaga' and descricao like'%".$busca."%'";
  $getvagasquery = mysql_query($getvagas) or die (mysql_error());
  $row = mysql_num_rows($getvagasquery);
  
  
  	echo ' <table class="table table-bordered" align="center"  width="100%" cellspacing="5spx"> ';
   
echo '<tr>';
 
echo '<td> <b> Grau de Estudo </b></td>';
 
echo '<td><b> Descricao </b></td>';
 
echo '<td><b> Requesito </b></td>';

echo '<td><b> Salario </b></td>';

echo '<td><b> Beneficio </b> </td> ';
 
echo '</tr> ';

  				
echo "<tr>";
echo "</tr>";
echo "<tr>";
echo "</tr>";

  
  if($row>0) {
  while($getvagaslinha = mysql_fetch_array($getvagasquery)){
  
    $descricao = $getvagaslinha ['descricao'];
	  $grauestudo = $getvagaslinha ['grauestudo'];
        $requesito = $getvagaslinha ['requesito'];
		$salario = $getvagaslinha ['salario'];
		$beneficio = $getvagaslinha ['beneficio'];


				
   echo "<tr>";
  
echo " <td> $grauestudo </td>";
 
echo "<td> $descricao</td>";
 
echo "<td>$requesito</td>";

echo "<td>$salario</td>";
 
echo "<td> $beneficio</td>";
  
echo "</tr>";
 }   
 echo "</table> </center> ";
 
 } else {
	echo " </br> <center> Nenhum resultado encontrado com essa sua busca </br> </br>";
	}
  
  ?>
  
  

	<script src="assets/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="assets/js/holder.js"></script>


		<footer id="footer">
		<p align="center">
			<img align="center" src="imagem/rodape.jpg" width="990" height="117" alt="" />
		</p>
		<p class="pull-right">
			<a href="#">Para cima</a>
		</p>
		<p>
			&copy; T-Shaped 2013 Company, Inc. 
		</p>
	</footer>
	</p>
  
    
  </body>

</html>