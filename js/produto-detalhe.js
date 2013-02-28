$(document).ready(function(){
    galeriaProdutoDetalhe();
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

