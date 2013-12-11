<!DOCTYPE html>
<html lang="pt-br">

<!-- Mirrored from getbootstrap.com/examples/carousel/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 10 Oct 2013 12:16:10 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="assets/ico/favicon.png">

<link href="css/tshaped.css" rel="stylesheet" type="text/css" />
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"
	type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/jquery-ui.js"
	type="text/javascript"></script>
<script src="js/tshaped.js" type="text/javascript"></script>


<title>T-Shaped Corporation LTDA</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->

<!-- Custom styles for this template -->
<link href="css/carousel.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
  <body>
    
				<!-- Menu -->
  
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
						   <li><a href="paginaBuscaCurriculos.php">Usuario</a></li>
           </li>  </ul>
                        
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="paginaCadastroVaga.php">Vagas</a></li>
                    <li><a href="paginaCadastroEmpresa.html">Empresa</a></li>
                    <li><a href="paginaCadastroUsuario.html">Usuario</a></li>
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



<?php

include_once 'CadastroTShaped.php';
include_once 'TShapedDAO.php';

$id_usuario = $_GET['idUsuario'];

$tshaped = new TShapedDAO();
$result = $tshaped->buscaTshapedHorizontal($id_usuario);
$resultVertical = $tshaped->buscaTshapedVertical($id_usuario);

?>

	<div id="principal">
	 <div id="boxEsquerda">
		<div id="horizontal">
	<?php foreach ($result as $resultado) { ?>
	<p style="font-family:<?=$resultado['css_fonte']?>;
	font-size:<?=$resultado['css_size']?>;
	left:<?=$resultado['css_left']?>;
	top:<?=$resultado['css_top']?>;
	position:absolute;
	
	">
	
	<?=$resultado['texto']?></p>
	<?php } ?>
		
		
		</div>
	<div id="vertical">
			
	<?php foreach ($resultVertical as $resultado) { ?>
	<p class="rotate" style="font-family:<?=$resultado['css_fonte']?>;
	font-size:<?=$resultado['css_size']?>;
	left:<?=$resultado['css_left']?>;
	top:<?=$resultado['css_top']?>;
	position:absolute;
	
	">
	
	<?=$resultado['texto']?></p>
	<?php } ?>
		
			
			</div>
		</div>
                
            
            <div class="clear"></div>
            
            <div id="btnVoltar"><a href="paginaBuscaCurriculos.php">voltar</a></div>
            
	</div>


		<footer id="footer">
			<p align="center">
				<img align="center" src="imagem/rodape.jpg" width="990" height="117" alt="" />
			</p>
				</footer>

	</div>

	<script src="assets/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="assets/js/holder.js"></script>
</body>


</html>

