$(document).ready(function(){
    inicia();
    selectPersonalizado();
    checkboxPersonalizado();
    paginasProdutoVisualizado();
});

function selectPersonalizado(){
    $(".divCampo select").styleCombobox({
        classFocus:"comboboxFocus"
    });
}


function checkboxPersonalizado(){
    $("#ckNews").styleRadioCheckbox({
        classChecked:"inputCheckboxChecked",
        classFocus:"inputFocus"
    });
}

function paginasProdutoVisualizado(){
    $(".produtosVisualizados").cycle({
        fx: 'fade',
        speed: 800,
        timeout: 0,
        nowrap: 1,
        pager: '.pgProdutosVisualizados'
    });
}
