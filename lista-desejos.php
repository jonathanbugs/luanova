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
        <link rel="stylesheet" type="text/css" media="screen" href="css/lista-desejos.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/lista-desejos.js"></script>
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
                    <li class="last"><a href="javascript:;" title="Bolsas médias">Lista de Desejos</a></li>
                </ul>
            </div>

            <div class="cabecalhoInternas clearfix">
                <h2 class="ttCabecalho">Lista de Desejos</h2>
                <span class="categoria catDesejos replace"></span>
            </div>

            <div class="boxListaDesejos">
                <table class="tabelaDesejos">
                    <tr class="titulosTabela">
                        <td class="blocoTabelaProduto tituloProdutoLista">Produto</td>
                        <td class="blocoTabelaCenter blocoTabelaValor">Valor</td>
                        <td class="blocoTabelaCenter blocoTabelaOpcoes">Opções</td>
                    </tr>
                    <tr class="blocoTabela">
                        <td class="tdCenter blocoTabelaHeight blocoTabelaProduto blocoTabelaProdutoTitulo">
                            <a href="javascript:;">
                                <img class="imgProdutoLista" src="img/conteudo/produto-lista-desejo-1.jpg" alt="" />
                                Bolsa média - 4174V33
                            </a>
                        </td>
                        <td class="tdCenter blocoTabelaCenter blocoTabelaValor blocoTabelaHeight">R$ 426,90</td>
                        <td class="tdCenter blocoTabelaCenter blocoTabelaOpcoes">
                            <a href="javascript:;" class="iconesTabela iconeSacola replace">Sacola</a>
                            <a href="javascript:;" class="iconesTabela iconeExcluir replace">Excluir</a>
                        </td>
                    </tr>
                    <tr class="blocoTabela">
                        <td class="tdCenter blocoTabelaHeight blocoTabelaProduto blocoTabelaProdutoTitulo">
                            <a href="javascript:;">
                                <img class="imgProdutoLista" src="img/conteudo/produto-lista-desejo-2.jpg" alt="" />
                                Bolsa média - 4174V33
                            </a>
                        </td>
                        <td class="tdCenter blocoTabelaCenter blocoTabelaValor blocoTabelaHeight">R$ 426,90</td>
                        <td class="tdCenter blocoTabelaCenter blocoTabelaOpcoes">
                            <a href="javascript:;" class="iconesTabela iconeSacola replace">Sacola</a>
                            <a href="javascript:;" class="iconesTabela iconeExcluir replace">Excluir</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <? include 'includes/rodape.php';?>
    </div>
</body>
</html>
