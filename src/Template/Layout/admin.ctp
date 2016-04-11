<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
	<?php echo $this->Html->css(['admin/assets/plugins/pace/pace-theme-flash.css','admin/assets/plugins/boostrapv3/css/bootstrap.min.css','admin/assets/plugins/font-awesome/css/font-awesome.css','admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css','admin/assets/plugins/bootstrap-select2/select2.css','admin/assets/plugins/switchery/css/switchery.min.css','admin/assets/plugins/nvd3/nv.d3.min.css','admin/assets/plugins/mapplic/css/mapplic.css','admin/assets/plugins/bootstrap-datepicker/css/datepicker3.css','admin/assets/plugins/jquery-metrojs/MetroJs.css','admin/pages/css/pages-icons.css','admin/pages/css/pages.css']);?>
	<?= $this->Html->css(['fileinput/css/fileinput.css'])?>
	<?= $this->Html->css(['admin/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css'])?>
	<?= $this->Html->css(['admin/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css'])?>
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header dashboard">
  <?=$this->element('Admin/sidebar');?>
  <div class="page-container ">
    <?=$this->element('Admin/header');?>
    <?=$this->fetch('content');?>
	<?=$this->element('Admin/footer');?>
  </div>
    
    <!-- BEGIN VENDOR JS -->
	<?= $this->Html->script(['admin/assets/plugins/pace/pace.min.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/jquery/jquery-1.11.1.min.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/modernizr.custom.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/jquery-ui/jquery-ui.min.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/boostrapv3/js/bootstrap.min.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/jquery/jquery-easy.js'])?> 	
	<?= $this->Html->script(['admin/assets/plugins/jquery-unveil/jquery.unveil.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-bez/jquery.bez.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-ios-list/jquery.ioslist.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-actual/jquery.actual.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/bootstrap-select2/select2.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/summernote/js/summernote.min.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/moment/moment.min.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js'])?> 
    <?= $this->Html->script(['admin/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/jquery-autonumeric/autoNumeric.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/dropzone/dropzone.min.js'])?> 
	<?= $this->Html->script(['admin/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js'])?> 
	<?= $this->Html->script(['admin/assets/plugins/jquery-inputmask/jquery.inputmask.min.js'])?> 
	<?= $this->Html->script(['admin/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js'])?> 
    <?= $this->Html->script(['admin/assets/js/form_elements.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/classie/classie.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/switchery/js/switchery.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js'])?>
	<?php /* <?= $this->Html->script(['admin/assets/plugins/nvd3/lib/d3.v3.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/nv.d3.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/utils.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/tooltip.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/interactiveLayer.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/models/axis.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/models/line.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/nvd3/src/models/lineWithFocusChart.js'])?> */ ?>
	<?= $this->Html->script(['admin/assets/plugins/mapplic/js/hammer.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/mapplic/js/jquery.mousewheel.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/mapplic/js/mapplic.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-metrojs/MetroJs.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js'])?>
	<?= $this->Html->script(['admin/assets/plugins/jquery-validation/js/jquery.validate.min.js'])?>
	<?= $this->Html->script(['admin/pages/js/pages.min.js'])?>
	<?= $this->Html->script(['admin/assets/js/scripts.js'])?>
	<?= $this->Html->script(['fileinput/js/fileinput.js'])?>
	<?= $this->Html->script(['ckeditor/ckeditor.js'])?>
	<?= $this->Html->script(['admin/admin.js'])?>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <!-- END PAGE LEVEL JS -->
	
  </body>
</html>