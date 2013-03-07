$(document).ready(function(){
	inicia();
        accordionMinhaConta();
});


function accordionMinhaConta(){
    $(".accordionMinhaConta h3, .accordionMinhaConta .statusMinhaConta").click(function(){
        if($(this).parent("li").hasClass("accordionSelecionado") == false){
            $(this).parent("li").addClass("accordionAcao");

            $(".accordionSelecionado .conteudoAccordion").slideUp( 250,
                function(){
                $(".accordionSelecionado").find("table").css("opacity", 0);
                $(".accordionSelecionado").find(".btAbrirAccordion").removeClass("btAccordionAberto");
                $(".accordionSelecionado").removeClass("accordionSelecionado");
            });

            $(".accordionAcao .conteudoAccordion").slideDown( 250,
                function(){
                $(".accordionAcao table").css("visibility", "visible").animate({"opacity":1})
                $(".accordionAcao").addClass("accordionSelecionado");
                $(".accordionAcao").find(".btAbrirAccordion").addClass("btAccordionAberto");
                $(".accordionAcao").removeClass("accordionAcao");
            });
        } else{
            $(".accordionSelecionado .conteudoAccordion").slideUp( 250,
                function(){
                    $(".accordionSelecionado").find("table").css("opacity", 0);
                    $(".accordionSelecionado").find(".btAbrirAccordion").removeClass("btAccordionAberto");
                    $(".accordionSelecionado").removeClass("accordionSelecionado");
                }
            );
        }
    });
}
