$(document).ready(function(){
	inicia();
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
