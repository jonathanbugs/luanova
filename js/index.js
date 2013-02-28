$(document).ready(function(){
	inicia();
	bannerDestaques();
	$('.scroll').jScrollPane({autoReinitialise: true});
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
		timeout:		2000
	});
}

