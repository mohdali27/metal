<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Metal International, LLC.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.png" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
	<?php echo $this->Html->css(['admin/assets/plugins/pace/pace-theme-flash.css','admin/assets/plugins/boostrapv3/css/bootstrap.min.css','admin/assets/plugins/font-awesome/css/font-awesome.css','admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css','admin/assets/plugins/bootstrap-select2/select2.css','admin/assets/plugins/switchery/css/switchery.min.css','admin/pages/css/pages-icons.css','front/css/component.css','front/css/simple.css','front/css/dropzone.css']);?>
	
    
  <!--[if lte IE 9]>
  <?php echo $this->Html->css('front/css/dialog.ie.css'); ?>	
  <![endif]-->
  </head>
  <body class="fixed-header no-header">
  <?=$this->element('front/profile/sidebar'); ?>
  <div class="page-container ">
        <?=$this->element('front/profile/header');?>
        <?=$this->fetch('content'); ?>
	 <!-- START CONTAINER FLUID -->
        <?=$this->element('front/profile/footer');?>
        <!-- END COPYRIGHT --> 
    <!--START QUICKVIEW -->
        <?= $this->element('front/profile/chat');?>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
        <?= $this->element('front/profile/search');?>
    <!-- END OVERLAY -->
  </div>
      <!-- END OVERLAY -->
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
    <?= $this->Html->script(['admin/assets/plugins/classie/classie.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/switchery/js/switchery.min.js'])?>
	<?= $this->Html->script(['imagesloaded.pkgd.min.js'])?>
    <?= $this->Html->script(['isotope.pkgd.min.js'])?>
    <?= $this->Html->script(['stepsForm.js'])?>
    <?= $this->Html->script(['dropzone.min.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/jquery-validation/js/jquery.validate.min.js'])?>
    <?= $this->Html->script(['admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js'])?>
    
    <!--<script src="assets/plugins/classie/classie.js" type="text/javascript"></script>-->
    
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <?= $this->Html->script(['admin/pages/js/pages.min.js'])?>
    <?= $this->Html->script('form_elements.js')?>
    <?= $this->Html->script('pages.social.min.js')?>
    <!-- END CORE TEMPLATE JS -->
    
    <!-- BEGIN PAGE LEVEL JS -->
    <?= $this->Html->script('scripts.js')?>
    <!-- On Click Edit JS -->
    
    <script type="text/javascript">
    $(document).ready(function(){
        $(".on-click-edit").click(function(){
            $(".default-text").hide();
            $(".save-btned").show();
            $(".edit-text").show();
        });

        $(".save-btned").click(function(){
            $(".default-text").show();
            $(".save-btned").hide();
            $(".edit-text").hide();
        });

    });

       $(document).ready(function(){
        $(".on-click-editd").click(function(){
            $(".default-textd").hide();
            $(".save-btnedd").show();
            $(".edit-textd").show();
        });
        $(".save-btnedd").click(function(){
            $(".default-textd").show();
            $(".save-btnedd").hide();
            $(".edit-textd").hide();
        });

    });

        $(document).ready(function(){
        $(".on-click-editded").click(function(){
            $(".default-textded").hide();
            $(".save-btnedded").show();
            $(".edit-textded").show();
        });
        $(".save-btnedded").click(function(){
            $(".default-textded").show();
            $(".save-btnedded").hide();
            $(".edit-textded").hide();
        });

    });

    </script>
    <!-- END PAGE LEVEL JS -->
    
  </body>
</html>