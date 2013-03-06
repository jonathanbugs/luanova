$(document).ready(function(){
    inicia();
    galeriaProdutoDetalhe();
    paginasProdutoRelacionado();
    zoomProduto();
    EscolhaCor();
    EscolhaTamanho();
    hoverThumbsCor();
});

function galeriaProdutoDetalhe(){
    $('#imgPrincipal ul').cycle({
        fx: 'fade',
        easing: "linear",
        speed: 800,
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
        easing: "linear",
        speed: 800,
        timeout: 0,
        nowrap: 1,
        pager: '.pgProdutosRelacionados'
    });
}

function zoomProduto(){
    $("#imgPrincipal a").fancybox({
        maxWidth: 900,
        padding: 10,
        prevEffect: "fade",
        nextEffect: "fade",
        fitToView : false
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

function hoverThumbsCor(){
    $(".corProduto").hover(function(){
        $(this).next(".thumbCor").fadeIn(400);
    }, function(){
        $(".thumbCor").hide();
    });
}
