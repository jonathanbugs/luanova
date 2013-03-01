<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <!-- titulo -->
    <title></title>
    <meta name="DC.title" content="" />
    <!-- /titulo -->

    <!-- metas tags -->
    <meta http-equiv="content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="rating" content="general" />
    <meta name="mssmarttagspreventparsing" content="true" />
    <meta name="ICBM" content="xx.xxxxxx,xx.xxxxxx" />
    <meta name="language" content="pt-br"/>
    <meta name="copyright" content=""/>
    <meta name="designer" content=""/>
    <meta name="revisit-after" content="1 Days"/>
    <meta name="distribution" content="Global"/>
    <meta name="robots" content="index, follow"/>
    <meta name="googlebot" content="noarchive"/>
    <meta http-equiv="imagetoolbar" content="no"/>
    <!-- /meta tags -->

    <!-- links -->
    <link rel="shortcut icon" href="favicon.ico" /> <!-- tamanho do favicon: 32x32 -->
    <!-- /links -->

    <!-- meta tags da secao -->
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="Subject" content=""/>
    <meta name="Abstract" content=""/>
    <meta name="DC.subject" lang="pt" content="" />
    <meta name="DC.description" lang="pt" content="" />
    <meta name="DC.identifier" scheme="DCTERMS.URI" content="" /> <!-- Colocar URL da p�gina -->
    <!-- /meta tags da secao -->

    <!-- Google Analytics -->
    <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
    </script>
    <!-- /Google Analytics -->

    <!-- CSS e JS da secao -->
        <link rel="stylesheet" type="text/css" media="screen" href="css/login.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
    <!-- /CSS e JS da secao -->
</head>

<body>
    <div id="pagina">
        <? include 'includes/topo.php';?>

        <div class="container clearfix">
            <div class="navegacaoAuxiliar clearfix">
                <a class="btVoltar" href="javascript:;" title="Voltar">Voltar</a>
                <ul id="migalhaPao">
                    <li><a href="javascript:;" title="Página inicial">Página inicial</a></li>
                    <li class="last"><a href="javascript:;" title="Bolsas médias">Login</a></li>
                </ul>
            </div>
            <div id="blocoLogin" class="clearfix">
                <div class="cabecalhoInternas">
                    <h2 class="ttCabecalho">Faça seu Login</h2>
                    <span class="categoria catLogin replace"></span>
                </div>

                <div class="blocoLoginCadastro clearfix">
                    <div class="blocoLogin">
                        <span class="ttLogin">Sou Cadastrado</span>

                        <div class="divLogin">
                            <p>Informe seus dados e faça login para prosseguir.</p>
                            <form>
                                <ul class="ulLogin">
                                    <li class="first">
                                        <label for="iptEmailLogin">E-mail:</label>
                                        <input type="text" name="iptEmailLogin" id="iptEmailLogin" />
                                    </li>
                                    <li>
                                        <label for="iptSenhaLogin">Senha:</label>
                                        <input type="password" name="iptSenhaLogin" id="iptSenhaLogin" />
                                    </li>
                                    <li>
                                        <a href="javascript:;"class="lkEsqueciSenha" title="Esqueci minha senha">Esqueci minha senha</a>
                                    </li>
                                </ul>

                                <div class="divBtEnviar">
                                    <input type="submit" id="btEnviarLogin" class="replace-bt" value="Enviar" />
                                </div>
                            </form>
                        </div>

                        <div class="divEsqueciSenha">
                            <p class="pEsqueciSenha">Se você esqueceu sua senha, informe seu email para que uma nova senha seja enviada.</p>
                            <div class="divIptEsqueciSenha">
                                <label for="iptEsqueciSenha">E-mail</label>
                                <input type="text" name="iptEsqueciSenha" id="iptEsqueciSenha" />
                                
                                <a class="lkVoltarLogin" href="javascript:;" title="Voltar ao login">Voltar ao login</a>
                            </div>

                            <div class="divBtEnviar">
                                <input type="submit" id="btEnviarEsqueciSenha" class="replace-bt" value="Enviar" />
                            </div>

                        </div>
                    </div>

                    <div class="blocoCadastro">
                        <span class="ttLogin">Quero me cadastrar</span>
                        <p>Cadastre-se na loja Luz da Lua e garanta seu login para fazer suas compras e criar sua lista de desejos.</p>
                        <form>
                            <div class="divIptEmailCadastro">
                                <label for="iptEmailCadastro">E-mail:</label>
                                <input type="text" name="iptEmailCadastro" id="iptEmailCadastro" />                                
                            </div>

                            <div class="divBtEnviar">
                                <input type="submit" id="btEnviarCadastro" class="replace-bt" value="Enviar" />
                            </div>
                        </form>                        
                    </div>
                </div>
            </div>
        </div>

        <? include 'includes/rodape.php';?>
    </div>
</body>
</html>
