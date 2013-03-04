<div id="topo">
    <div class="menuTopo">
        <div class="container clearfix">
            <h1 class="boxLogo"><a class="logo replace" href="./" title="LUZ DA LUA">LUZ DA LUA</a></h1>

            <!-- menu principal -->
            <ul class="menu">
                <li class="liMenu liMenuPrimeiro textoMenu">Seja bem vindo. <a class="linkMenu" href="javascript:;">Faça Login</a> ou <a class="linkMenu" href="javascript:;">Cadastre-se</a></li>
                <li class="liMenu"><a class="linkMenu linkMenuDisplay" href="javascript:;">Minha Conta</a></li>
                <li class="liMenu"><a class="linkMenu linkMenuDisplay" href="javascript:;">Lista de Desejos</a></li>
                <li class="liMenu liMenuUltimo btCompras">
                    <a class="linkMenu linkMenuDisplay linkMenuSacola" href="javascript:;">Sacola de Compras</a>
                    <span class="numeroItens">02</span>
                    <div class="boxSacolaCompras">
                        <ul class="listaItens scroll">
                            <li class="liItens">
                                <a class="linkProduto" href="javascript:;">
                                    <img class="imgSacola" src="img/conteudo/produto-sacola.jpg" alt=""/>
                                    <span class="tituloProduto">Bolsa média - 4174V33</span>
                                </a>

                                <div class="boxPreco">
                                    <span class="precoProduto">R$ 426,90</span>
                                    <a class="excluirProduto replace" href="javascript:;">Excluir</a>
                                </div>
                            </li>
                            <li class="liItens">
                                <a class="linkProduto" href="javascript:;">
                                    <img class="imgSacola" src="img/conteudo/produto-sacola.jpg" alt=""/>
                                    <span class="tituloProduto">Bolsa média - 4174V33</span>
                                </a>

                                <div class="boxPreco">
                                    <span class="precoProduto">R$ 426,90</span>
                                    <a class="excluirProduto replace" href="javascript:;">Excluir</a>
                                </div>
                            </li>
                            <!--li class="liItens">
                                <a class="linkProduto" href="javascript:;">
                                    <img class="imgSacola" src="img/conteudo/produto-sacola.jpg" alt=""/>
                                    <span class="tituloProduto">Bolsa média - 4174V33</span>
                                </a>

                                <div class="boxPreco">
                                    <span class="precoProduto">R$ 1200,90</span>
                                    <a class="excluirProduto replace" href="javascript:;">Excluir</a>
                                </div>
                            </li-->
                        </ul>

                        <div class="boxSubTotal">
                            <span class="textoSubtotal">SUBTOTAL:</span>
                            <span class="textoValorSubtotal">R$ 653,80</span>
                        </div>

                        <div class="boxVoltarContinuar clearfix">
                            <a class="continuarCompra" href="javascript:;">Continuar Comprando</a>
                            <a class="finalizarCompra replace" href="javascript:;">
                                <span class="finalizarComprahover">Finalizar Compra</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>

            <!-- categoria de produtos -->
            <ul class="menuCategorias clearfix">
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Lançamentos</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Acessórios</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Bolsas</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Calçados</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Carteiras</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Cintos</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Infantil</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Porta Bolsa</a></li>
                <li class="liCategorias"><a href="javascript:;" class="linkCategoria">Promoção</a></li>
                <li class="liCategorias liCategoriasUltimo"><a href="javascript:;" class="linkCategoria">Tendências</a></li>
            </ul>

            <form action="javascript:;" method="post" name="busca" id="buscaForm" lang="pt">
                <div class="relative">
                    <label class="label" for="busca">Buscar</label>
                    <input class="inputBusca" type="text" id="busca" name="busca" />
                </div>
                <button type="submit" class="botaoBuscar replace">
                    Buscar
                </button>
            </form>
        </div>
    </div>

    <? if($sessao == 'index') { ?>
    <div class="bannerHome">
        <div class="bannerCentro">
            <ul id="bannerDestaques">
                <li class="liBanner">
                    <a class="linkBanner">
                        <img src="img/banners/banner1.jpg" alt="Charme e Elegância"/>
                    </a>
                </li>

                <li class="liBanner">
                    <a class="linkBanner">
                        <img src="img/banners/banner2.jpg" alt="Charme e Elegância"/>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <? } ?>
</div>

