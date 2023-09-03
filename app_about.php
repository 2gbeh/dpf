<?php 
	require_once 'lib/jrad/php/master.php';
	require_once 'lib/jrad/php/widget.php';
	include_once 'src/_config_page.php';	
	include_once 'src/_config_app.php';	
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
  <main class="compact about">
    <img src="img/py.png" class="logo" alt="" />    
           
    
    <h2>IKA PYTHON BOOTCAMP '21</h2>
    
    <p>
      Delta State Government and D-Peterson Foundation kickstarts the IKA PYTHON BOOTCAMP; an initiative
      to <b>educate, empower</b> and <b>engage</b> 1,200 youths on industry-relevant ICT skills.
    </p>   
    
    <figure>
      <img src="img/maps.png" class="map" alt="" />
      <figcaption>
      	College ICT Centre, College of Education, Agbor, <br/>
      	P.M.B 2090, Delta State.
      </figcaption>
    </figure>
      
    <a href="app_email.php" class="btn">Register NOW (Free)</a>
    
    <div class="action">
      <p>&nbsp;</p>    
      <i class="fas fa-paper-plane"></i> &nbsp; 
      <a href="mailto:info@dpfiit.org">info@dpfiit.org</a>
      
      <p>&nbsp;</p>
      <i class="fas fa-phone fa-flip-horizontal"></i> &nbsp; 
      <a href="tel:+2348037383019">+234(0) 80 3738 3019</a>
    </div>
  </main>  
<?php include_once 'inc/app_foot.php'; ?>      
