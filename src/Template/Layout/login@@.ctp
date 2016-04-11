<!DOCTYPE html>
<html>
  <head>
   <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Login - Metal International, LLC.</title>
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
	
	<?php echo $this->Html->css(['admin/assets/plugins/pace/pace-theme-flash.css','admin/assets/plugins/boostrapv3/css/bootstrap.min.css','admin/assets/plugins/font-awesome/css/font-awesome.css','admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.css','admin/assets/plugins/bootstrap-select2/select2.css','admin/assets/plugins/switchery/css/switchery.min.css','admin/pages/css/pages-icons.css','admin/pages/css/pages.css']);?>
	
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
	
  </head>
  <body class="fixed-header">
  
    <?=$this->fetch('content');?>
    <!-- BEGIN VENDOR JS -->
	<?= $this->Html->script(['admin/assets/plugins/pace/pace.min.js','admin/assets/plugins/jquery/jquery-1.11.1.min.js','admin/assets/plugins/modernizr.custom.js','admin/assets/plugins/jquery-ui/jquery-ui.min.js','admin/assets/plugins/boostrapv3/js/bootstrap.min.js','admin/assets/plugins/jquery/jquery-easy.js','admin/assets/plugins/jquery-unveil/jquery.unveil.min.js','admin/assets/plugins/jquery-bez/jquery.bez.min.js','admin/assets/plugins/jquery-ios-list/jquery.ioslist.min.js','admin/assets/plugins/jquery-actual/jquery.actual.min.js','admin/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js','admin/assets/plugins/bootstrap-select2/select2.min.js','admin/assets/plugins/classie/classie.js','admin/assets/plugins/switchery/js/switchery.min.js','admin/assets/plugins/jquery-validation/js/jquery.validate.min.js','admin/pages/js/pages.min.js'])?> 
     <script>
    $(function()
    {
      $('#form-login').validate({
		  event:'blur'
	  })
    })
    </script>
	
  </body>
</html>