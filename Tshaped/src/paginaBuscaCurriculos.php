<?php
include "BuscaCurriculosDAO.php";
$dao = new BuscaCurriculosDAO();
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link rel="shortcut icon" href="assets/ico/favicon.png">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="dist/css/bootstrap.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
<link href="css/tshaped.css" rel="stylesheet">
<head>


<title>Consulta de Curr&iacute;culos</title>



</head>

<body >
<!-- Menu -->
  
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
  
   <div class="navbar-header">
        <a class="navbar-brand" href="index.html">T-Shaped</a>
  </div>

  <!-- Menu Restante -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="Sobre.html">About</a></li>
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Consulta <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                          <li><a href="BuscaVagas.php">Vagas</a></li>
						   <li class="active"> <a href="paginaBuscaCurriculos.php">Usuario</a></li>
						   <li><a href="visualizarTshaped.php">T-Shaped</a></li>
           </li>  </ul>
                        
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cadastros <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                   <li><a href="paginaCadastroVaga.php">Vagas</a></li>
                    <li><a href="paginaCadastroEmpresa.html">Empresa</a></li>
                    <li><a href="paginaCadastroUsuario.html">Usuario</a></li>
                                       <li><a href="tshaped.php">T-Shaped</a></li>
                 
                    </li>
                  </ul> </ul>  
      <!-- Menu Login -->
   <form class="navbar-form navbar-right" role="form">
  <div class="form-group">
    <label class="sr-only" for="exampleInputlogin">Login</label>
    <input type="login" class="form-control" id="exampleInputPassword2" placeholder="Login">
  </div>
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Senha</label>
    <input type="senha" class="form-control" id="exampleInputPassword2" placeholder="Senha">
  </div>
   <button type="submit" class="btn btn-default">Entrar</button>
</form>

   </div></nav>
    <!-- Fim do Menu --><div align="center" style="font-size: 36px; color:black;">Consulta de Curr&iacute;culos</div>
	
	
<form name="search_form" method="post" action="resultsCurriculo.php">


 <select class="col-xs-3" name="areaCurriculo" id ="areaCurriculo">
<option value="">Selecione a &Aacute;rea de Atua&ccedil;&atilde;o</option>
  
	<?php $dao->areasAtuacao(); ?>
    
  </select> 
  
     <input class="btn btn-primary" type="submit" name="submit" value="Consultar"/> 
    
  </form> </div> 
  


	<script src="assets/js/jquery.js"></script>
	<script src="dist/js/bootstrap.min.js"></script>
	<script src="assets/js/holder.js"></script>

	<footer id="footer2">
		<p align="center">
			<img align="center" src="imagem/rodape.jpg" width="990" height="117" alt="" />
		</p>
			</footer>
	</p>
</body>
</html>

