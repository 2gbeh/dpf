<?php include_once 'inc/app_top.php'; ?>
  <main class="compact">
  	<section>
    	<i class="fas fa-check-circle"></i>
      <h1>Form Submitted!</h1>
      <h2><?php echo $_GET['avatar']; ?></h2>
	
      <img src="img/avatar.png" alt="" />
    
      <p id="alt">
        Your bio has been captured successfully, 
        you will recieve an email wihtin the next <b>72 hours</b> containing your 
        <a>Admission Letter</a>, <a>Course Outline</a> and <a>Lecture Time Table</a>.
      </p>         
  	</section>   
  </main>  
<?php include_once 'inc/app_foot.php'; ?>      
