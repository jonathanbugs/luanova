$(document).ready(function(){
	inicia();
	selectPersonalizado();
	showMoverLista();
});

function selectPersonalizado(){
    $(".divSelTamanho select").styleCombobox({
        classFocus:"comboboxFocus"
    });
}


function showMoverLista(){
	$('.iconeDesejos').mouseenter(function() {
		$(this).nextAll('.hoverDesejos').show();
	});

	$('.iconeDesejos').mouseleave(function() {
		$(this).nextAll('.hoverDesejos').hide();
	});
}
