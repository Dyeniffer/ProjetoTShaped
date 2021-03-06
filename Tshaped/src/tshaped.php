<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<?php $id = $_GET['idUsuario'] ;?> 

<html lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>T-shaped</title>
<link href="css/tshaped.css" rel="stylesheet" type="text/css" />
<link href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" type="text/css" rel="stylesheet"/>
<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/tshaped.js" type="text/javascript"></script>
<script src="//code.jquery.com/ui/1.10.3/jquery-ui.js" type="text/javascript"></script>
</head>
<body>

<div id="principal">
	
	<div id="boxEsquerda">
		<div id="horizontal"></div>
		<div id="vertical"></div>
	</div>
	<div id="boxDireita">
		<div id="menu">
		<div class="organiza">
			<label><input type="radio" id="geral" name="tipoConhecimento" value="0" checked/>Abrangencia</label>
			<label><input type="radio" id="especialidade" name="tipoConhecimento" value="1"/>Conhecimento</label>
		</div>
		<!-- Abrangencia ou especialidade -->
			<div class="conhecimento">
			<div class="organiza">
				<label class="labelConhecimento">Seu nível de conhecimento:</label>
			</div>
				<div class="organizacaoInputs">
					<label><input type="radio" id="basic" name="nivelConhecimento" value="0" checked/>Básico</label>
					<label><input type="radio" id="intermate" name="nivelConhecimento" value="1"/>Intermediário</label>
					<label><input type="radio" id="advance" name="nivelConhecimento" value="2"/>Avançado</label>
				</div>
			</div>
			
			<div class="abrangencia">
			<div class="organiza">
				<label class="labelConhecimento">Seu nível de abrangência (geral)</label>
			</div> 
			<div class="organizacaoInputs">
				<label><input type="radio" id="basic" name="nivelAbrangencia" value="0" checked/>Interesse</label>
				<label><input type="radio" id="intermate" name="nivelAbrangencia" value="1"/>Entendo</label>
				<label><input type="radio" id="advance" name="nivelAbrangencia" value="2"/>Sou bom</label>
			</div>
			</div>
			
		 <input type="text" id="conhecimentoValue" class="inputConhecimento"/>
		 <label class="labelConhecimento"> Selecione uma fonte</label>
		<div class="organizacaoInputs">
			 <label class='tahoma'><input type="radio" name="fonte" value="0" checked/>Tahoma</label>
			 <label class='comicSans'><input type="radio" name="fonte" value="1"/>Comic Sans</label>
			 <label class='courier'><input type="radio" name="fonte" value="2"/>Courier</label>
		 </div>
		 <button id="enviar" class="button"><- Enviar para o tshaped</button>
		</div>
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		
		<button id="salvarTshaped" class="button">Salvar meu tshaped</button>
                <input type="hidden" id="idUsuario" value="<?php echo $id ?>" />
	</div>
</div>


</body>
</html>