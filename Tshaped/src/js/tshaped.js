$(document).ready(function(){
	//div class conhecimento esconder
	$(".conhecimento").hide();

	// na troca do conhecimento - geral , some a div
	tipoConhecimento = "0";
	$("[name='tipoConhecimento']").change(function(){
		if($(this).val() == "1"){
			tipoConhecimento  = "1";
			$(".conhecimento").show();
			$(".abrangencia").hide();
		} else {
			tipoConhecimento = "0";
			$(".conhecimento").hide();
			$(".abrangencia").show();
		}
	});
	
	
	//verificar os valores no change
	
	size = "small";
	$("[name='nivelAbrangencia']").change(function(){
		if($(this).val() == "0") { 
			size = "small";
		} else if ($(this).val() == "1") {
			size = "medium";
		} else {
			size = "big";
		}
	});
	
	//nivel conhecimento ou abrangencia;
	$("[name='nivelConhecimento']").change(function(){
			if($(this).val() == "0") { 
				size = "small";
			} else if ($(this).val() == "1") {
				size = "medium";
			} else {
				size = "big";
			}
	});
	
	
	fonte = "tahoma";
	$("[name='fonte']").change(function(){
		if($(this).val() == "0") {
			fonte = "tahoma";
		} else if ($(this).val() == "1") {
			fonte = "comicSans";	
		} else {
			fonte = "courier";
		}
	});
	
	
	//submeter novo conhecimento
	$("#enviar").click(function(){
		var valorCampo;
		//verifica se o campo está vazio
		if($("#conhecimentoValue").val() == "") {
				alert("Preencha o campo.");
				return false;
		} else {
			valorCampo = $("#conhecimentoValue").val();
		}
		
		
		palavra = "";
		if(tipoConhecimento == "0") {
			palavra = "<p class='paragrafo "+size+" "+fonte+" drag top'>"+valorCampo+"</p>";
			$("#horizontal").append(palavra);
		} else {
			palavra = "<p class='paragrafo "+size+" "+fonte+" drag bottom'>"+valorCampo+"</p>";
			$("#vertical").append(palavra);
		}
		
		$("#horizontal p").each(function(){
			$(this).draggable();
		});
		
		$("#vertical p").each(function(){
			$(this).draggable();
		});
		
	});
	
	
	
	
	
	
});