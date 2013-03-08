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
        <link rel="stylesheet" type="text/css" media="screen" href="css/sacola-compras.css" />
        <link rel="stylesheet" type="text/css" media="screen" href="css/jquery.jscrollpane.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/sacola-compras.js"></script>
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
                    <li class="last"><a href="javascript:;" title="">Sacola de Compras</a></li>
                </ul>
            </div>

            <div class="cabecalhoInternaSacola clearfix">
                <h2 class="ttCabecalhoSacola">Sacola de Compras</h2>
                <div class="blocoIconesSacola">
                    <span class="iconeSacola iconeSacola1"></span>
                    <span class="iconeSacola iconeSacola2"></span>
                    <span class="iconeSacola iconeSacola3"></span>
                    <span class="iconeSacola iconeSacola4"></span>
                </div>
            </div>

            <div class="boxListaSacola">
                <table class="tabelaSacola" cellspacing="0" cellpadding="0">
                    <tr>
                        <th class="titulosTabela titulosTabelaProduto tituloTabelaProduto">Produto</th>
                        <th class="titulosTabela tituloTabelaValor">Valor</th>
                        <th class="titulosTabela tituloTabelaTamanho">Tamanho</th>
                        <th class="titulosTabela tituloTabelaQuantidade">Quantidade</th>
                        <th class="titulosTabela tituloTabelaSubTotal">SubTotal</th>
                        <th class="titulosTabela tituloTabelaOpcoes">Opções</th>
                    </tr>
                    <tr class="blocoTabela">
                        <td class="blocoProduto">
                            <a href="javascript:;" class="tabelaProduto">
                                <img class="imgProdutoLista" src="img/conteudo/produto-lista-desejo-1.jpg" alt="" />
                                <span class="tituloProduto">Bolsa média - 4174V33</span>
                            </a>
                        </td>
                        <td class="blocoCenter blocoValor"><strong>R$ 426,90</strong></td>
                        <td class="blocoCenter blocoTamanho">
                            <div class="blocoRelative">
                                <span class="boxAbsolute">
                                    <span class="divSelTamanho">
                                        <select id="tamanho" name="selTamanho">
                                            <option>Único</option>
                                            <option>G</option>
                                            <option>M</option>
                                        </select>
                                    </span>
                                </span>
                            </div>
                        </td>
                        <td class="blocoCenter blocoQuantidade">
                            <div class="blocoRelativeQuantidade">
                                <span class="boxAbsoluteQuantidade">
                                    <input type="text" value="2" class="inputQuantidade" />
                                </span>
                            </div>
                        </td>
                        <td class="blocoCenter blocoValorSub">
                            <strong>R$ 426,90</strong>
                        </td>

                        <td class="blocoCenter blocoOpcoes">
                            <div class="blocoRelativeOpcoes">
                                <a class="iconesSacola iconeDesejos replace" href="javascript:;">Lista de Desejos</a>
                                <a class="iconesSacola iconeExcluir replace" href="javascript:;">Excluir</a>
                                <span class="hoverDesejos replace">Mover para Lista de Desejos</span>
                            </div>
                        </td>
                    </tr>

                    <tr><td class="separarTabela"></td></tr>

                    <tr class="blocoTabela">
                        <td class="blocoProduto">
                            <a href="javascript:;" class="tabelaProduto">
                                <img class="imgProdutoLista" src="img/conteudo/produto-lista-desejo-2.jpg" alt="" />
                                <span class="tituloProduto">Bolsa média - 4174V33</span>
                            </a>
                        </td>
                        <td class="blocoCenter blocoValor"><strong>R$ 426,90</strong></td>
                        <td class="blocoCenter blocoTamanho">
                            <div class="blocoRelative">
                                <span class="boxAbsolute">
                                    <span class="divSelTamanho">
                                        <select name="selTamanho" id="selTamanho">
                                            <option>Único</option>
                                            <option>G</option>
                                            <option>M</option>
                                        </select>
                                    </span>
                                </span>
                            </div>
                        </td>
                        <td class="blocoCenter blocoQuantidade">
                            <div class="blocoRelativeQuantidade">
                                <span class="boxAbsoluteQuantidade">
                                    <input type="text" value="2" class="inputQuantidade" />
                                </span>
                            </div>
                        </td>
                        <td class="blocoCenter blocoValorSub">
                            <strong>R$ 426,90</strong>
                        </td>

                        <td class="blocoCenter blocoOpcoes">
                            <div class="blocoRelativeOpcoes">
                                <a class="iconesSacola iconeDesejos replace" href="javascript:;">Lista de Desejos</a>
                                <a class="iconesSacola iconeExcluir replace" href="javascript:;">Excluir</a>
                                <span class="hoverDesejos replace">Mover para Lista de Desejos</span>
                            </div>
                        </td>
                    </tr>
                    <tr><td class="separarTabela"></td></tr>
                </table>

                <div class="blocoAbaixoTabela">
                    <span class="textoAbaixo">Calcule o valor do frete:</span>
                    <div class="relativeInput">
                        <input type="text" class="inputBlocos" />
                        <button type="submit" class="btOk">OK</button>
                    </div>
                    <a class="textoCep" href="javascript:;">Não sabe o cep?</a>
                    <div class="boxValor">
                        <span class="texto">Frete:</span>
                        <span class="valor">R$ 23,80</span>
                    </div>
                </div>

                <div class="blocoAbaixoTabela">
                    <span class="textoAbaixo">Cupom de desconto:</span>
                    <div class="relativeInput">
                        <input type="text" class="inputBlocos" />
                        <button type="submit" class="btOk">OK</button>
                    </div>
                    <a class="textoCep" href="javascript:;"></a>
                    <div class="boxValor">
                        <span class="texto">Desconto:</span>
                        <span class="valor">R$ 50,80</span>
                    </div>
                </div>

                <div class="blocoAbaixoTabela">
                    <span class="textoTotal">Total:</span>
                    <span class="textoValorTotal">R$ 1.154,50</span>
                </div>

                <div class="clearfix">
                    <a class="continuarCompra" href="javascript:;">Continuar Comprando</a>
                    <a class="finalizarCompra replace" href="javascript:;">
                        <span class="finalizarComprahover">Finalizar Compra</span>
                    </a>
                </div>
            </div>
        </div>

        <? include 'includes/rodape.php';?>
    </div>
</body>
</html>
