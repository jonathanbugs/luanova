$(document).ready(function(){
	inicia();
	bannerDestaques();
	bannerProdutosDestaques();
	bannerPrincipaisOfertas();
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
		fx:				'fade',
		speed:			800,
		cleartype:		!$.support.opacity,
		cleartypeNoBg:	true,
		timeout:        4000
	});
}

function bannerProdutosDestaques(){
	$("#bannerProdutosDestaques").before('<div id="nav" class="nav">').cycle({
		fx:				'fade',
		easing:			'linear',
		speed:			800,
		cleartype:		!$.support.opacity,
		cleartypeNoBg:	true,
		timeout:		0,
		pager:  '#nav'
	});
}

function bannerPrincipaisOfertas(){
	$("#bannerPrincipaisOfertas").before('<div id="navOfertas" class="nav">').cycle({
		fx:				'fade',
		easing:			'linear',
		speed:			800,
		cleartype:		!$.support.opacity,
		cleartypeNoBg:	true,
		timeout:		0,
		pager:  '#navOfertas'
	});
}

