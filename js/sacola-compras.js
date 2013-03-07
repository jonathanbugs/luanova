$(document).ready(function(){
	inicia();
	selectPersonalizado();
});

function selectPersonalizado(){
    $(".divSelQuantidade select").styleCombobox({
        classFocus:"comboboxFocus"
    });
}
