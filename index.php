<? $sessao = 'index'; ?>

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
<meta name="DC.identifier" scheme="DCTERMS.URI" content="" /> <!-- Colocar URL da página -->
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
<link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/jquery.jscrollpane.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/funcoes.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<!-- /CSS e JS da secao -->

</head>

<body>
	<div id="pagina">
		  <? include 'includes/topo.php';?>

		  <div id="conteudo">
				  <div class="container clearfix">
				  	  <div id="produtosDestaque">
				  	  		<div class="boxTituloBlocos">Produtos Em Destaque</div>

				  	  		<div class="bannerDestaque">
					  	  	    <div class="destaqueMaior">
					  	  	    		<img class="imgDestaque imgDestaqueMaior" src="img/conteudo/produto-destaque.png" alt=""/>
					  	  	    		<div class="informacoesProduto">
					  	  	    				<span class="titulo">Bolsa média - 4174V33</span>
					  	  	    				<span class="preco"><span class="textoSublinhado">De R$ 709,90</span> / Por R$ 426,90</span>
					  	  	    		</div>
					  	  	    </div>

					  	  	    <div class="destaqueMenor">
					  	  	    		<div class="boxImagem">
					  	  	    			<img class="imgDestaque imgDestaqueMenor" src="img/conteudo/produto-destaque-menor.png" alt=""/>
					  	  	    		</div>
					  	  	    		<div class="informacoesProduto">
					  	  	    				<span class="titulo">Bolsa média - 4174V33</span>
					  	  	    				<span class="preco"><span class="textoSublinhado">De R$ 709,90</span> / Por R$ 426,90</span>
					  	  	    		</div>
					  	  	    </div>

					  	  	    <div class="destaqueMenor destaqueMenorMargem">
					  	  	    </div>
				  	  		</div>
				      </div>
			    </div>
		  </div>

		  <? include 'includes/rodape.php';?>
	</div>
</body>
</html>
