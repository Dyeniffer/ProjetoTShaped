<?php

include_once 'CadastroTShaped.php';
include_once 'TShapedDAO.php';


$idUsuario = $_GET['idUsuario'];

$tshaped = new TShapedDAO();
$result = $tshaped->buscaTshapedHorizontal($idUsuario);
$resultVertical = $tshaped->buscaTshapedVertical($idUsuario);

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>T-shaped</title>
<link href="css/tshaped.css" rel="stylesheet" type="text/css" />
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css"
	type="text/css" rel="stylesheet" />
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/tshaped.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js"
	type="text/javascript"></script>
</head>
<body>

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

<input type="hidden" id="idUsuario" value="<?php $idUsuario ?>">

	</div>

</body>
</html>

