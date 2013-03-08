$(document).ready(function(){
	inicia();
        selectPersonalizado();
});

function selectPersonalizado(){
    $(".divCampo select").styleCombobox({
        classFocus:"comboboxFocus"
    });
}