$(document).ready(function(){
	inicia();
	zoomInstitucional();
});

function zoomInstitucional(){
    $(".imgInstitucional").fancybox({
        padding: 10,
        prevEffect: "fade",
        nextEffect: "fade"
    });
}
