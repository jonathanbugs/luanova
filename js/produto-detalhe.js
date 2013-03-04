$(document).ready(function(){
    inicia();
    galeriaProdutoDetalhe();
    paginasProdutoRelacionado();
    zoomProduto();
    EscolhaCor();
    EscolhaTamanho();
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

function EscolhaCor(){
    $(".corProduto").click(function(){
        $(".corProduto").removeClass("corProdutoSelecionado");
        $(this).addClass("corProdutoSelecionado");
    });
}

function EscolhaTamanho(){
    $(".ulTamanhos a").click(function(){
        $(".ulTamanhos a").removeClass("selecionado");
        $(this).addClass("selecionado");
    });
}