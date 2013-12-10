

<?php

include "BuscaVagasDao.php";
$dao = new BuscaVagasDao();


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

  
  
 <?php
 	$dao ->retornaVagas ($areaVaga=$_POST['areavaga'], $busca=$_POST['busca']);
  ?>
 
  <body style="background-color: buttonface;">
	<div class="navbar-wrapper">
		<div class="container">

			<div class="navbar navbar-inverse navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a href="index.html"><img src="Imagem/Logo T-Shaped.jpg"
							width="182" height="51" alt="" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="Sobre.html">About</a></li>
							<li class="dropdown"><a href="#" class="dropdown-toggle"
								data-toggle="dropdown">Consulta <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="BuscaVagas.php">Vagas</a></li></li>
						</ul>
						</li>

						<li class="dropdown"><a href="#" class="dropdown-toggle"
							data-toggle="dropdown">Cadastros <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="paginaCadastroVaga.php">Vagas</a></li>
								<li><a href="paginaCadastroEmpresa.html">Empresa</a></li>
								<li><a href="paginaCadastroUsuario.html">Usuario</a></li></li>
						</ul>
						</li>

						<li></li>
						<li></li>
						<li></li>
						</ul>
						<div align="center" class="Login">
							<label for="LOGIN"><span style="font-size: 15px"> LOGIN</span></label>
							<input type="text" name="LOGIN" id="LOGIN"> <label for="SENHA"
								style="font-size: 15px"> SENHA </label> <input type="password">
							<input type="submit" name="submit" id="submit" value="Enviar">
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>

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