$(document).ready(function(){
	inicia();
	bannerDestaques();
	bannerProdutosDestaques();
});

$(window).resize(function(){
	bannerDestaques();
});

function bannerDestaques(){
	var larguraTela = $(window).width();
	var larguraBanner = 2000 /*LARGURA DAS IMAGENS DO BANNER */
	$('.bannerCentro').css({
		marginLeft: Math.ceil((larguraTela - larguraBanner) /2)
	});

	$("#bannerDestaques").cycle({
		fx:				'scrollLeft',
		easing:			'easeInQuart',
		speed:			1000,
		cleartype:		!$.support.opacity,
		cleartypeNoBg:	true,
		timeout:		4000
	});
}

function bannerProdutosDestaques(){
	$("#bannerProdutosDestaques").before('<div id="nav">').cycle({
		fx:				'fade',
		easing:			'linear',
		speed:			1500,
		cleartype:		!$.support.opacity,
		cleartypeNoBg:	true,
		timeout:		4000,
		pager:  '#nav'
	});
}

