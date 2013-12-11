<?php

include "conexao.php";



?>


<!DOCTYPE html>
<html lang="en">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="assets/ico/favicon.png">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="dist/css/bootstrap.css" rel="stylesheet">
<link href="css/footer2.css" rel="stylesheet">
<head>


<title>Buscar Vagas</</title>



</head>
	
<body style="background-color: buttonface;">
	<div c<!-- Menu -->
  
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  
   <div class="navbar-header">
        <a class="navbar-brand" href="index.html">T-Shaped</a>
  </div>

  <!-- Menu Restante -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                          <li><a href="BuscaVagas.php">Vagas</a></li>
           </li>  </ul>
                        
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="Vaga.php">Vagas</a></li>
                    <li><a href="Empresa.html">Empresa</a></li>
                    <li><a href="Usuario.html">Usuario</a></li>
                                       
                 
                    </li>
                  </ul> </ul>  
     <!-- Menu Login -->
   <form class="navbar-form navbar-right" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Login">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Senha</label>
    <input type="senha" class="form-control" id="exampleInputPassword2" placeholder="Senha">
  </div>
   <button type="submit" class="btn btn-default">Entrar</button>
</form>
</form>

   </div></nav>
    <!-- Fim do Menu -->
<div align="center" style="font-size: 36px; color:black;">Buscar Vagas</div>
	
	
<form name="search_form" method="post" action="results.php">


 <select class="col-xs-3" name="areavaga">
<option value="">Selecione a Area</option>
  
  <?php
$getareavagas= "SELECT *
FROM areavagas";
$getareavagasquery = mysql_query($getareavagas) or die (mysql_error());
 while($getareavagaslinha = mysql_fetch_array($getareavagasquery)){
 $areavaga = $getareavagaslinha ['areavaga'];
 $areavaga_id = $getareavagaslinha ['areavaga_id'];
 echo "<option value='$areavaga_id'> $areavaga</option>";
 } 
    ?>
    
  </select> 
  
  <div align="center" class="col-xs-2">
  <input  class="form-control" placeholder="Filtro" name="busca"/>  </div> 
  
     <input class="btn btn-primary" type="submit" name="submit" value="Consultar"/> 
    
  </form> </div> 
  


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
></script>
