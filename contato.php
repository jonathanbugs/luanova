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
        <link rel="stylesheet" type="text/css" media="screen" href="css/contato.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/contato.js"></script>
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
                    <li class="last"><a href="javascript:;" title="Bolsas médias">Contato</a></li>
                </ul>
            </div>

            <div class="boxContato">

                <div class="cabecalhoInternas clearfix">
                    <h2 class="ttCabecalho">Contato</h2>
                    <span class="categoria catContato replace"></span>
                </div>

                 <div class="blocoContato">
                    <p class="pContato">Fale conosco preenchendo os campos abaixo, e em breve retornaremos. Seu contato é muito importante para nós. Os campos com * são obigatórios.</p>

                    <div class="divFormContato">
                        <form id="formContato" action="" method="post">
                            <ul>
                                <li>
                                    <div class="divCampo">
                                        <label for="iptNome">Nome: <span>*</span></label>
                                        <input type="text" name="iptNome" id="iptNome" />
                                    </div>

                                    <div class="divCampo divCampoLast">
                                        <label for="iptEmail">E-mail: <span>*</span></label>
                                        <input type="text" name="iptEmail" id="iptEmail" />
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo">
                                        <label for="iptTelefone">Telefone:</label>
                                        <input type="text" name="iptTelefone" id="iptTelefone" />
                                    </div>
                                    
                                    <div class="divCampo">
                                        <label for="selEstado">Estado: <span>*</span></label>

                                        <div class="divSelEstado">
                                            <select name="selEstado" id="selEstado">
                                                <option>Selecione o Estado</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="divCampo divCampoLast">
                                        <label for="selCidade">Cidade: <span>*</span></label>

                                        <div class="divSelCidade">
                                            <select name="selCidade" id="selCidade">
                                                <option>Selecione a Cidade</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li class="last">
                                    <div class="divCampo divCampoLast">
                                        <label for="txtMensagem">Mensagem: <span>*</span></label>
                                        <textarea id="txtMensagem" name="txtMensagem"></textarea>
                                    </div>
                                </li>

                                <li class="divEnviarContato">
                                    <div class="divBtEnviar">
                                        <button id="btEnviarDadosContato" class="replace">Enviar</button>
                                    </div>
                                </li>
                            </ul>
                        </form>

                    </div>
                    
                    <div class="divMsgSucesso hidden">
                        <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <? include 'includes/rodape.php';?>
    </div>
</body>
</html>
