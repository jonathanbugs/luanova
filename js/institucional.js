$(document).ready(function(){
	inicia();
	zoomInstitucional();
});


function zoomInstitucional(){
	$('.linkImgInstitucional').on('click', function(){
		modalZoomInstitucional($(this));

		$('#centralizaImagem').stop().animate({
			marginTop: -180,
			height: 400
		}, 500, "easeInOutQuad");
	});
}


function modalZoomInstitucional(ele){
	var imagem = ele.children('.imagemInstitucionalAmpliada').html();
	$('body').append('<div id="holderInstitucional"><div id="overlayInstitucional"></div>'+
						'<div id="centralizaImagem">'+
						'<div id="contentImagemAmpliada">'+
						'<a id="fecharZoomInstitucional" class="btFecharZoom replace" href="javascript:;">Fechar</a>'+
						'<div class="boxImagem"><img class="imgServicoModal" src="img/conteudo/'+imagem+'.jpg"></div>'+
						'</div>'+
						'</div>'+
						'</div>'+
					 '</div>');

	$('#overlayInstitucional, #centralizaImagem').fadeTo(500,0.85).click(function(){
		$(this).fadeTo(500,0).siblings().hide();
		setTimeout("$('#holderInstitucional').remove()",500);
	});

	$('#fecharZoomInstitucional').click(function(){
		$('#overlayInstitucional').fadeTo(500,0).siblings().hide();
		setTimeout("$('#holderInstitucional').remove()",500);
	});
}
