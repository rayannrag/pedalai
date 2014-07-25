<?php include("Constants.php"); ?>

<!doctype html>
<html xmlns:og="http://ogp.me/ns#" lang="pt-br">
<head>
	<meta charset="utf-8" />

	<title><?php echo _TITLE ?></title>

	<!-- META TAGS -->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="HandheldFriendly" content="true">
    <meta name="format-detection" content="telephone=yes">
    <meta http-equiv="cleartype" content="on">

    <!-- APPLE TOUCH ICON -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-touch-icon-iphone4.png" />

	<!-- CSS -->
	<link rel="canonical" href="#">
    <link rel="stylesheet" href="libs/css/foundation.css">
	<link rel="stylesheet" href="dist/css/styles.combined.min.css">

	<!-- HUMANS -->
    <link type="text/plain" rel="author" href="http://www.dominio.com.br/humans.txt" />

    <!-- FAVICON E TOUCH ICON IN THE ROOT DIRECTORY -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="./apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./apple-touch-icon-ipad.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="./apple-touch-icon-iphone4.png" />

    <!-- OPEN GRAPH -->
    <meta property='og:title' content='' />
    <meta property='og:description' content='' />
    <meta property='og:url' content='' />
    <meta property='og:image' content='http://url-do-site/img/img-og-facebook-200x200.png'/>
    <meta property='og:type' content='website' />
    <meta property='og:site_name' content='' />
</head>

<body data-screen="home">

	<div class="off-canvas-wrap" data-offcanvas>

	  <div class="inner-wrap">

	    <!-- nav -->
	    <nav class="tab-bar">
	      <section class="left-small">
	        <a class="left-off-canvas-toggle menu-icon" href="#">
	        	<span></span>
	        </a>
	      </section>

	      <section class="middle tab-bar-section">
	        <h1 class="title-primary">Quero Pedalar</h1>
	      </section>

	      <!-- <section class="right-small">
	        <a class="right-off-canvas-toggle menu-icon" href="#">
	        	<span></span>
	        </a>
	      </section> -->
	    </nav>

	    <!-- menu esquerdo -->
	    <aside class="left-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label class="canvas-title">Quero Pedalar <span>mapa ></span></label></li>
	        <li class="canvas-list"><a href="#">Sozinho</a></li>
	        <li class="canvas-list"><a href="#">Em Grupo</a></li>
	      </ul>

	      <ul class="legend-list">
	      	<li class="legend-item">Minha Legenda 1</li>
	      	<li class="legend-item">Minha Legenda 2</li>
	      	<li class="legend-item">Minha Legenda 3</li>
	      	<li class="legend-item">Minha Legenda 4</li>
	      	<li class="legend-item">Minha Legenda 5</li>
	      	<li class="legend-item">Minha Legenda 6</li>
	      	<li class="legend-item">Minha Legenda 7</li>
	      	<li class="legend-item">Minha Legenda 8</li>
	      	<li class="legend-item">Minha Legenda 9</li>
	      	<li class="legend-item">Minha Legenda 10</li>
	      	<li class="legend-item">Minha Legenda 11</li>
	      	<li class="legend-item">Minha Legenda 12</li>
	      </ul>
	    </aside>

	    <!-- menu direito -->
	    <!-- <aside class="right-off-canvas-menu">
	      <ul class="off-canvas-list">
	        <li><label>Users</label></li>
	        <li><a href="#">Hari Seldon</a></li>
	        <li><a href="#">...</a></li>
	      </ul>
	    </aside> -->

	    <section class="main-section">
	      <!-- content goes here -->
	    </section>

	  	<a class="exit-off-canvas"></a>

	  </div>
	</div>

	<div id="map"></div>

	<footer class="footer">
		<div class="center"></div>
	</footer>


	<script src="libs/js/jquery-2.1.1.min.js"></script>
	<script src="libs/js/foundation.min.js"></script>
	<script src="libs/js/foundation.offcanvas.js"></script>

	 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBaTdjugjXQ2DuUsARrnV8sb1dVoGtIqCI"></script>
   <script src="src/js/APP.js"></script>
	 <script src="src/js/APP.Home.js"></script>

	<script>
	$(document).foundation();
  APP.iniciar();
	</script>

</body>
</html>