<?php include_once 'inc/app_top.php'; ?>  
  <main class="compact">
  	<section>
      <i class="fas fa-paper-plane"></i>
      <h1>Email Address</h1>    
      <p>A 6-digit OTP code will be sent to this email address for verification purpose.</p>   
    </section>   

    <form class="root" <?php echo FORM_ATTRIB; ?>>
    	<div style="padding-top:2px;"></div>
      
      <input type="email" name="email" value="<?php echo $_POST['email']; ?>" placeholder="example@domain.com" required />    
      
      <button type="submit" class="pri">Send OTP</button>      
    </form>  
	</main>    
<?php include_once 'inc/app_end.php'; ?>
