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
        <link rel="stylesheet" type="text/css" media="screen" href="css/meus-pedidos.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/meus-pedidos.js"></script>
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
                    <li class="last"><a href="javascript:;" title="Bolsas médias">Minha Conta</a></li>
                </ul>
            </div>

            <div class="boxMeusPedidos">

                <div class="cabecalhoInternas clearfix">
                    <h2 class="ttCabecalho">Meus Pedidos</h2>
                    <span class="categoria catMeusPedidos replace"></span>
                </div>
            
                <ul class="subMenuMinhaConta">
                    <li><a class="selecionado" href="javascript:;" title="Como comprar">Meus Pedidos</a> |</li>
                    <li><a href="javascript:;" title="Perguntas frequentes">Minha Conta</a></li>
                </ul>

                <ul class="accordionMinhaConta">
                    <li>
                        <h3>PEDIDO - 1180<a class="btAbrirAccordion replace" href="javascript:;">Abrir</a></h3>
                        <ul class="statusMinhaConta">
                            <li class="statusOk">Em Análise<span> /</span></li>
                            <li>Enviado<span> /</span></li>
                            <li>Entregue</li>
                        </ul>
                        <div class="conteudoAccordion">
                            <table class="tabelaPedido">
                                <thead>
                                    <tr>
                                        <td class="colProduto">Produto</td>
                                        <td class="colValor">Valor</td>
                                        <td class="colTamanho">Tamanho</td>
                                        <td class="colQuantidade">Quantidade</td>
                                        <td class="colSubtotal">Subtotal</td>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td class="colProduto">
                                            <span>
                                                <img src="img/conteudo/thumb-meus-pedidos.jpg" alt="Nome da Bolsa" />
                                                <span>Bolsa média - 4174V33</span>
                                            </span>
                                        </td>
                                        
                                        <td class="colValor">
                                            R$ 426,90
                                        </td>
                                        
                                        <td class="colTamanho">
                                            Único
                                        </td>

                                        <td class="colQuantidade">
                                            2
                                        </td>
                                        
                                        <td class="colSubtotal">
                                            R$ 853,80
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="clearfix">
                                
                                <div class="dadosEntrega">
                                    <span class="ttEnderecoEntrega">Endereço de entrega</span>
                                    <ul>
                                        <li>
                                            <span class="ttDadosPrazo">Dados para Entrega</span>

                                            <span class="endereco">Rua Tomé de Souza, 36</span> 
                                            <span class="endereco">Santos Dumont  - São Leopoldo - RS</span>
                                            <span class="endereco">CEP 93115-270</span>
                                        </li>
                                        <li>
                                            <span class="ttDadosPrazo">Previsão de Entrega</span>

                                            <span class="prazo">1 dias úteis após a confirmação do pagamento.</span> 
                                        </li>
                                    </ul>
                                </div>

                                <div class="valorTotal">
                                    <ul class="ulValores">
                                        <li>
                                            <span class="ttCampo">Frete:</span>
                                            <span class="ttValor">R$ 23,80</span>
                                        </li>
                                        <li>
                                            <span class="ttCampo">Desconto:</span>
                                            <span class="ttValor">R$ 50,00</span>
                                        </li>
                                        <li class="last">
                                            <span class="ttValorTotal">R$ 1.154,50</span>
                                        </li>
                                    </ul>
                                </div>
                        </div>
                    </li>
                    <li>
                        <h3>PEDIDO - 1180<a class="btAbrirAccordion replace" href="javascript:;">Abrir</a></h3>
                        <ul class="statusMinhaConta">
                            <li class="statusOk">Em Análise<span> /</span></li>
                            <li>Enviado<span> /</span></li>
                            <li>Entregue</li>
                        </ul>
                        <div class="conteudoAccordion">
                        </div>
                    </li>
                    <li>
                        <h3>PEDIDO - 1180<a class="btAbrirAccordion replace" href="javascript:;">Abrir</a></h3>
                        <ul class="statusMinhaConta">
                            <li class="statusOk">Em Análise<span> /</span></li>
                            <li>Enviado<span> /</span></li>
                            <li>Entregue</li>
                        </ul>
                        <div class="conteudoAccordion">
                            
                            <table class="tabelaPedido">
                                <thead>
                                    <tr>
                                        <td class="colProduto">Produto</td>
                                        <td class="colValor">Valor</td>
                                        <td class="colTamanho">Tamanho</td>
                                        <td class="colQuantidade">Quantidade</td>
                                        <td class="colSubtotal">Subtotal</td>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td class="colProduto">
                                            <span>
                                                <img src="img/conteudo/thumb-meus-pedidos.jpg" alt="Nome da Bolsa" />
                                                <span>Bolsa média - 4174V33</span>
                                            </span>
                                        </td>
                                        
                                        <td class="colValor">
                                            R$ 426,90
                                        </td>
                                        
                                        <td class="colTamanho">
                                            Único
                                        </td>

                                        <td class="colQuantidade">
                                            2
                                        </td>
                                        
                                        <td class="colSubtotal">
                                            R$ 853,80
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="colProduto">
                                            <span>
                                                <img src="img/conteudo/thumb-meus-pedidos.jpg" alt="Nome da Bolsa" />
                                                <span>Bolsa média - 4174V33</span>
                                            </span>
                                        </td>
                                        
                                        <td class="colValor">
                                            R$ 426,90
                                        </td>
                                        
                                        <td class="colTamanho">
                                            Único
                                        </td>

                                        <td class="colQuantidade">
                                            2
                                        </td>
                                        
                                        <td class="colSubtotal">
                                            R$ 853,80
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="colProduto">
                                            <span>
                                                <img src="img/conteudo/thumb-meus-pedidos.jpg" alt="Nome da Bolsa" />
                                                <span>Bolsa média - 4174V33</span>
                                            </span>
                                        </td>
                                        
                                        <td class="colValor">
                                            R$ 426,90
                                        </td>
                                        
                                        <td class="colTamanho">
                                            Único
                                        </td>

                                        <td class="colQuantidade">
                                            2
                                        </td>
                                        
                                        <td class="colSubtotal">
                                            R$ 853,80
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="clearfix">
                                
                                <div class="dadosEntrega">
                                    <span class="ttEnderecoEntrega">Endereço de entrega</span>
                                    <ul>
                                        <li>
                                            <span class="ttDadosPrazo">Dados para Entrega</span>

                                            <span class="endereco">Rua Tomé de Souza, 36</span> 
                                            <span class="endereco">Santos Dumont  - São Leopoldo - RS</span>
                                            <span class="endereco">CEP 93115-270</span>
                                        </li>
                                        <li>
                                            <span class="ttDadosPrazo">Previsão de Entrega</span>

                                            <span class="prazo">1 dias úteis após a confirmação do pagamento.</span> 
                                        </li>
                                    </ul>
                                </div>

                                <div class="valorTotal">
                                    <ul class="ulValores">
                                        <li>
                                            <span class="ttCampo">Frete:</span>
                                            <span class="ttValor">R$ 23,80</span>
                                        </li>
                                        <li>
                                            <span class="ttCampo">Desconto:</span>
                                            <span class="ttValor">R$ 50,00</span>
                                        </li>
                                        <li class="last">
                                            <span class="ttValorTotal">R$ 1.154,50</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <? include 'includes/rodape.php';?>
    </div>
</body>
</html>
