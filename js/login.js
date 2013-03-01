$(document).ready(function(){
    EsqueciSenha();
});

function EsqueciSenha(){
    $(".lkEsqueciSenha").click(function(){
        $(".divLogin").hide();
        $(".divEsqueciSenha").fadeIn();
    });
    
    $(".lkVoltarLogin").click(function(){
        $(".divEsqueciSenha").hide();
        $(".divLogin").fadeIn();
    });
}
