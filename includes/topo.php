<div id="topo">
    <div class="menuTopo">
        <div class="container clearfix">
            <h1 class="boxLogo"><a class="logo replace" href="../" title="LUZ DA LUA">LUZ DA LUA</a></h1>

            <ul class="menu">
                <li class="liMenu liMenuFirst"><span class="textoMenu">Seja bem vindo. <a class="linkMenu" href="javascript:;">Faça Login</a> ou <a class="linkMenu" href="javascript:;">Cadastre-se</a></li>
                <li class="liMenu"><a class="linkMenu linkMenuDisplay" href="javascript:;">Minha Conta</a></li>
                <li class="liMenu"><a class="linkMenu linkMenuDisplay" href="javascript:;">Lista de Desejos</a></li>
                <li class="liMenu liMenuLast">
                    <a class="linkMenu linkMenuDisplay linkMenuSacola" href="javascript:;">Sacola de Compras</a>
                    <span class="numeroItens">02</span>
                </li>
            </ul>

            <div class="boxSacolaCompras">
            </div>
        </div>
    </div>

    <? if($sessao == 'index') { ?>
    <div class="bannerHome">
        <div class="bannerCentro">
            <ul id="bannerDestaques">
                <li class="liBanner">
                    <a class="linkBanner">
                        <img src="img/banners/banner1.jpg" alt="Charme e Elegância">
                    </a>
                </li>

                <li class="liBanner">
                    <a class="linkBanner">
                        <img src="img/banners/banner2.jpg" alt="Charme e Elegância">
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <? } ?>
</div>
