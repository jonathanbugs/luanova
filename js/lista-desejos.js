$(document).ready(function(){
	inicia();
    showMoverSacola();
});


function showMoverSacola(){
    $('.blocoTabela').on('mouseenter', function(){
        $(this).find('.iconeMover').show();
    });

    $('.blocoTabela').on('mouseleave', function(){
        $(this).find('.iconeMover').hide();
    });
}
