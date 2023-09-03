<?php 
	require_once 'lib/jrad/php/master.php';
	require_once 'lib/jrad/php/widget.php';	
	require_once 'lib/jrad/php/chart.php';		
	include_once 'src/_config_page.php';	
	include_once 'src/_config_app.php';
	include_once 'src/class_app.php';
	include_once 'src/glob_app_shared.php';		
	include_once 'src/'.$page_ctx_action;	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include_once 'inc/app_meta.php';
	include_once 'inc/app_head.php';
?>
</head>
<body class="tmp-kity">
  <header>
    <a href="app_about.php" title="Home">
      <img src="img/badge.png" class="lg" alt="<?php echo APPNAME; ?>" />
    </a>
  </header>
  
  <?php echo Notice::main($error, $errno); ?>
