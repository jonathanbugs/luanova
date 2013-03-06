$(document).ready(function(){
    inicia();
    accordionComoComprar();
});

function accordionComoComprar(){
    $(".accordionComoComprar h3").click(function(){
        if($(this).parent("li").hasClass("accordionSelecionado") == false){
            $(this).parent("li").addClass("accordionAcao");

            $(".accordionSelecionado .conteudoAccordion").slideUp( 250,
                function(){
                $(".accordionSelecionado").find(".btAbrirAccordion").removeClass("btAccordionAberto");
                $(".accordionSelecionado").removeClass("accordionSelecionado");
            });

            $(".accordionAcao .conteudoAccordion").slideDown( 250,
                function(){
                $(".accordionAcao").addClass("accordionSelecionado");
                $(".accordionAcao").find(".btAbrirAccordion").addClass("btAccordionAberto");
                $(".accordionAcao").removeClass("accordionAcao");
            });
        } else{
            $(".accordionSelecionado .conteudoAccordion").slideUp( 250,
                function(){
                    $(".accordionSelecionado").find(".btAbrirAccordion").removeClass("btAccordionAberto");
                    $(".accordionSelecionado").removeClass("accordionSelecionado");
                }
            );
        }
    });
}

