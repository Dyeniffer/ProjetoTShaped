<?php

include "conexao.php";



?>


<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from getbootstrap.com/examples/carousel/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 10 Oct 2013 12:16:10 GMT -->
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="assets/ico/favicon.png">

<title>Cadastro de Usuario</title>

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
	media="screen">
<link href="dist/css/bootstrap.css" rel="stylesheet">

<link href="css/carousel.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body style="background-color: buttonface;">
	<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header"><a href="index.html"><img src="Imagem/Logo T-Shaped.jpg" width="182" height="51"  alt=""/></a></div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                     <li><a href="BuscaVagas.php">Vagas</a></li>
					 </li>  </ul>
                </li>
					
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                        <li><a href="paginaCadastroVaga.php">Vagas</a></li>
                    <li><a href="paginaCadastroEmpresa.html">Empresa</a></li>
                    <li><a href="paginaCadastroUsuario.html">Usuario</a></li>
                                       
                    
                    </li>
                  </ul>
                </li>
                
                  <li></li>
                  <li></li>
                  <li></li></ul>
						<div align="center" class="Login">
							<label for="LOGIN"><span style="font-size: 15px">
									LOGIN</span></label> <input type="text" name="LOGIN" id="LOGIN"> <label
								for="SENHA" style="font-size: 15px"> SENHA </label> <input
								type="password"> <input type="submit" name="submit"
								id="submit" value="Enviar">
						</div>
					</div>
				</div>
			</div>


		</div>
	</div>


	<div align="center" class="Cabeça"
		style="font-size: 36px; color: black;">Cadastro Vaga</div>

	<div align="justify" class="Formulario">



		<p align="center">Cadastre suas vagas e encontre o perfil idel
			para sua empresa!</p>

<form class="form-horizontal" method="POST" action="vagasMain.php">

<div class="control-group">
<label class="control-label">Area:</label>
	<div style="margin-top: 06px;" class="controls">
<select class="col-xs-3" name="areaVaga" id ="areaVaga">
<option value="">Selecione a Area</option>
  
			<?php
$getareavagas= "SELECT *
FROM areavagas";
$getareavagasquery = mysql_query($getareavagas) or die (mysql_error());
 while($getareavagaslinha = mysql_fetch_array($getareavagasquery)){
 $areavaga = $getareavagaslinha ['areavaga'];
 $areavaga_id = $getareavagaslinha ['id'];
 echo "<option value='$areavaga_id'> $areavaga</option>";
 } 
    ?>
    
  </select> </div></div>

		
			<div class="control-group">
				<label class="control-label">Grau de Estudo:</label>
				<div style="margin-top: 06px;" class="controls">
					<input type="text" class="input-xxlarge" required id="grauEstudo"
						name="grauEstudo" placeholder="Grau de Estudo">
				</div>
			</div>


			<div class="control-group">
				<label class="control-label">Requisitos:</label>
				<div style="margin-top: 06px;" class="controls">
					<textarea class="input-xxlarge" rows="4" cols="50"
						name="requisitos" placeholder="Digite os requisitos da vaga"></textarea>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Descri&ccedil;&atilde;o:</label>
				<div style="margin-top: 06px;" class="controls">
					<textarea class="input-xxlarge" rows="4" cols="50" name="descricao"
						placeholder="Descreva as funcionalidades da vaga"></textarea>

				</div>


			</div>



			<div class="control-group">
				<label class="control-label">Sal&aacute;rio:</label>
				<div style="margin-top: 06px;" class="controls">
					<input type="text" class="input-xxlarge" id="salario"
						name="salario" placeholder="Sálario">
				</div>
			</div>

			<div class="control-group">
				<label class="control-label">Benef&iacute;cios:</label>
				<div style="margin-top: 06px;" class="controls">
					<textarea class="input-xxlarge" rows="4" cols="50"
						name="beneficios" id ="beneficios"
						placeholder="Descreva os benefícios oferecidos pela vaga"></textarea>

				</div>


			</div>

			<div align="center">
				<button class="btn btn-primary input-xxlarge " type="submit"
					name="acao" value="ENVIAR">Enviar</button>
			</div>
		</form>

	</div>




	<script src="assets/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="assets/js/holder.js"></script>
</body>


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
</html>
