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
        <link rel="stylesheet" type="text/css" media="screen" href="css/cadastro.css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/plugins.js"></script>
        <script type="text/javascript" src="js/funcoes.js"></script>
        <script type="text/javascript" src="js/cadastro.js"></script>
        <!-- /CSS e JS da secao -->
    </head>

    <body>
        <div id="pagina">
            <? include 'includes/topo.php'; ?>

            <div class="container clearfix">
                <div class="navegacaoAuxiliar clearfix">
                    <a class="btVoltar" href="javascript:;" title="Voltar">Voltar</a>
                    <ul id="migalhaPao">
                        <li><a href="javascript:;" title="Página inicial">Página inicial</a></li>
                        <li class="last"><a href="javascript:;" title="Bolsas médias">Cadastro</a></li>
                    </ul>

                </div>
                <div class="cabecalhoInternas">
                    <h2 class="ttCabecalho">Cadastro</h2>
                    <span class="categoria catLogin replace"></span>
                </div>

                <div class="blocoCadastro">
                    <p class="pCadastro">Cadastre-se na loja Luz da Lua e garanta seu login para fazer compras e criar sua lista de desejos. Os campos com * são obrigatórios.</p>

                    <div class="divFormCadastro hidden">

                        <form id="formCadastro" action="" method="post">
                            <ul>
                                <li>
                                    <div class="divCampo">
                                        <label for="iptNome">Nome: <span>*</span></label>
                                        <input type="text" name="iptNome" id="iptNome" />
                                    </div>

                                    <div class="divCampo divCampoLast">
                                        <label for="">E-mail: <span>*</span></label>
                                        <input type="text" name="iptEmail" id="iptEmail" />
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo">
                                        <label for="iptTelefone">Telefone:</label>
                                        <input type="text" name="iptTelefone" id="iptTelefone" />
                                    </div>

                                    <div class="divCampo">
                                        <label for="iptNascimento">Data de Nascimento: <span>*</span></label>
                                        <input type="text" name="iptNascimento" id="iptNascimento" />
                                    </div>

                                    <div class="divCampo">
                                        <label for="iptCPF">CPF: <span>*</span></label>
                                        <input type="text" name="iptCPF" id="iptCPF" />
                                    </div>

                                    <div class="divCampo divCampoLast">
                                        <label for="iptRG">RG:</label>
                                        <input type="text" name="iptRG" id="iptRG" />
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo divCampoCEP">
                                        <label for="iptCEP">CEP: <span>*</span></label>
                                        <input type="text" name="iptCEP" id="iptCEP" />
                                    </div>
                                    <div class="divCampo divCampoLast">
                                        <label for="iptEndereco">Endereço: <span>*</span></label>
                                        <input type="text" name="iptEndereco" id="iptEndereco" />
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo">
                                        <label for="iptNumero">Número: <span>*</span></label>
                                        <input type="text" name="iptNumero" id="iptNumero" />
                                    </div>

                                    <div class="divCampo">
                                        <label for="iptComplemento">Complemento:</label>
                                        <input type="text" name="iptComplemento" id="iptComplemento" />
                                    </div>

                                    <div class="divCampo divCampoLast">
                                        <label for="iptBairro">Bairro: <span>*</span></label>
                                        <input type="text" name="iptBairro" id="iptBairro" />
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo">
                                        <label for="selCidade">Cidade: <span>*</span></label>

                                        <div class="divSelCidade">
                                            <select name="selCidade" id="selCidade">
                                                <option>Selecione a Cidade</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="divCampo divCampoLast">
                                        <label for="selEstado">Estado: <span>*</span></label>

                                        <div class="divSelEstado">
                                            <select name="selEstado" id="selEstado">
                                                <option>Selecione o Estado</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="divCampo">
                                        <label for="iptSenha">Senha: <span>*</span></label>
                                        <input type="text" name="iptSenha" id="iptSenha" />
                                    </div>
                                    <div class="divCampo divCampoLast">
                                        <label for="iptSenhaRepeticao">Repetir a senha: <span>*</span></label>
                                        <input type="text" name="iptSenhaRepeticao" id="iptSenhaRepeticao" />
                                    </div>
                                </li>

                                <li class="divCheckboxEnviarCadastro">
                                    <div class="divCheckNews">

                                        <label><input id="ckNews" type="checkbox" value="" />Desejo receber os informativos da Luz da Lua por e-mail.</label>
                                    </div>

                                    <div class="divBtEnviar">
                                        <input type="submit" value="Enviar" id="btEnviarDadosCadastro" class="replace-bt" />
                                    </div>
                                </li>
                            </ul>
                        </form>

                    </div>
                    <div class="divMsgSucesso">
                        <div>
                            <p class="msgPrimaria">Seu cadastro foi efetuado com sucesso!</p>
                            <p class="msgSecundaria">Agora você já pode aproveitar todas as ofertas da loja Luz da Lua.</p>
                            <a class="btPaginaInicial replace" href="./" title="Página Inicial"><span>Página Inicial</span></a>
                        </div>
                    </div>
                </div>

                 <div id="blocoProdutosVisualizados">
                    <div class="cabecalhoProdutosVisualizados">
                        <span class="ttProdutosVisualizados">
                            <span class="produtos">Produtos</span>
                            <span class="visualizados">Visualizados</span>
                        </span>

                        <div class="pgProdutosVisualizados">

                        </div>
                    </div>
                    <ul class="produtosVisualizados">
                        <li class="slide">
                            <ul>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">442</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">02</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">32</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">322</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                       </span>
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">1232</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <ul>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">2</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">0492</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">12</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">2444</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>

                                        </span>
                                    </a>
                                </li>
                                <li class="last">
                                    <a href="javascript:;">
                                        <img src="img/conteudo/thumb-produto-relacionado.jpg" alt="" />

                                        <span class="ttProdutoVisualizado">Bolsa média - 4174V33</span>
                                        <span class="valoresProdutoVisualizado">
                                            <span class="deValorProdutoVisualizado">De R$ 1.709,90</span>
                                            /
                                            <span class="porValorProdutoVisualizado">Por R$ 826,90</span>
                                            <span class="boxParcelas">
                                                <span class="quantidadeVezes">
                                                    <span class="textoVezes">6x</span>
                                                    <span class="textoJuros">s/ juros</span>
                                                </span>
                                                <span class="valorParcela">
                                                    <span class="textoValor">232</span><span class="textoCentavos">,00</span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <? include 'includes/rodape.php'; ?>
        </div>
    </body>
</html>
