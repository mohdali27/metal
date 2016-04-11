<!DOCTYPE html>
<html>
  <head>
    
    <!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="NextEvent - Conference & Event HTML Template" />
	<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
	<meta name="author" content="ThemeMascot" />

	<!-- Page Title -->
	<title>Metal International, LLC.</title>

	<!-- Favicon and Touch Icons -->
	<link href="<?=HTTP_ROOT?>img/front/images/favicon.png" rel="shortcut icon" type="image/png">
	<link href="<?=HTTP_ROOT?>img/front/images/apple-touch-icon.png" rel="apple-touch-icon">
	<link href="<?=HTTP_ROOT?>img/front/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
	<link href="<?=HTTP_ROOT?>img/front/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
	<link href="<?=HTTP_ROOT?>img/front/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">


	<?php echo $this->Html->css(['front/css/bootstrap.min.css','front/css/animate.css','front/css/css-plugin-collections.css']);?>
	<link  href="<?=HTTP_ROOT?>js/front/js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
	<link  href="<?=HTTP_ROOT?>js/front/js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
	<link  href="<?=HTTP_ROOT?>js/front/js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>
	<?= $this->Html->css(['front/css/custom-bootstrap-margin-padding.css'])?>
	<?= $this->Html->css(['front/css/main-style.css'])?>
	<?= $this->Html->css(['front/css/colors/blue-gray.css'])?>
	<?= $this->Html->css(['front/css/responsive.css'])?>
	<?= $this->Html->script(['front/js/jquery-2.1.4.min.js'])?> 
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="">
  <div id="wrapper"> 
    <!-- preloader -->
	  <div id="preloader">
		<div id="spinner">
		  <div class="cssload-container">
			<div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
		  </div>
		</div>
	  </div>
	  <?=$this->element('front/header');?>
	  <?=$this->fetch('content');?>
	  <?=$this->element('front/footer');?>
  </div>
    
    <!-- BEGIN VENDOR JS -->
	
	<?= $this->Html->script(['front/js/bootstrap.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/jquery.themepunch.tools.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/jquery.themepunch.revolution.min.js'])?>
	<?= $this->Html->script(['front/js/custom-rev-slider.js'])?>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<?= $this->Html->script(['front/js/jquery-plugin-collection.js'])?>
	<?= $this->Html->script(['front/js/custom.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js'])?>
	<?= $this->Html->script(['front/js/revolution-slider/js/extensions/revolution.extension.video.min.js'])?>
	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
(Load Extensions only on Local File Systems ! 
The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="<?=HTTP_ROOT?>js/front/js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
    
	
  </body>
</html>