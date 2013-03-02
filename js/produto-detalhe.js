$(document).ready(function(){
    inicia();
    galeriaProdutoDetalhe();
    paginasProdutoRelacionado();
    zoomProduto();
});

function galeriaProdutoDetalhe(){
    $('#imgPrincipal ul').cycle({
        fx: 'fade',
        speed: 'fast',
        timeout: 0,
        prev: '#prev',
        next: '#next',
        nowrap: 1,
        pager: '#imgThumbs ul',
        pagerAnchorBuilder: function(idx, slide) {
            // return selector string for existing anchor
            return '#imgThumbs ul li:eq(' + idx + ') a';
        }
    });
}

function paginasProdutoRelacionado(){
    $(".produtosRelacionados").cycle({
        fx: 'fade',
        speed: 'fast',
        timeout: 0,
        nowrap: 1,
        pager: '.pgProdutosRelacionados'
    });
}

function zoomProduto(){
    $("#imgPrincipal a").fancybox({
        padding: 10,
        prevEffect: "fade",
        nextEffect: "fade"
    });
}
