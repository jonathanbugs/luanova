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
    <!-- /CSS e JS da secao -->
</head>

<body>
    <div id="pagina">
        <? include 'includes/topo.php';?>

        <div class="container">
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

            </div>
    </div>
    
    <? include 'includes/rodape.php';?>
</body>
</html>
