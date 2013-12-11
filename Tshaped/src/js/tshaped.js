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
		//verifica se o campo est� vazio
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
	
	
	$("#salvarTshaped").click(function(){
		
		$("#horizontal p").each(function(){
			valorp = $(this).html();
			tpGeral = 0;
			css_left = $(this).css('left');
			css_top = $(this).css('top');
			css_fonte = $(this).css('font-family');
			css_size = $(this).css('font-size');
			
			$.ajax({
				url:'ajaxTshaped.php?valorp='+valorp+'&tipo='+tpGeral+'&css_left='+css_left+'&css_top='+css_top+'&css_fonte='+css_fonte+'&css_size='+css_size+'&idUsuario='+$("#idUsuario").val(),
				type:'POST',
				success:function(){
					console.log('1');
				},
				dataType:'json'
			});
		});
		
		
		$("#vertical p").each(function(){
			valorp = $(this).html();
			tpGeral = 1;
			css_left = $(this).css('left');
			css_top = $(this).css('top');
			css_fonte = $(this).css('font-family');
			css_size = $(this).css('font-size');
			
			$.ajax({
				url:'ajaxTshaped.php?valorp='+valorp+'&tipo='+tpGeral+'&css_left='+css_left+'&css_top='+css_top+'&css_fonte='+css_fonte+'&css_size='+css_size+'&idUsuario='+$("#idUsuario").val(),,
				type:'POST',
				success:function(){
					console.log('1');
				},
				dataType:'json'
			});
		});
                
                $("#salvarTshaped").val("Salvando Tshaped ...");
                $("#salvarTshaped").attr("disabled",true);
		
		setTimeout(function(){
                    alert("tshaped cadastrado com sucesso!");
                    window.location = "index.html";
                },5000);
                
	});
	
	
	
	
});