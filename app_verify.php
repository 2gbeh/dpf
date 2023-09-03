<?php include_once 'inc/app_top.php'; ?>  
  <main class="compact">
  	<section>
      <i class="fa fa-lock"></i>
      <h1>OTP Code</h1>    
      <p>Enter the 6-digit OTP code that was sent your email address:</p>   
    </section>    
    
    <form class="root" <?php echo FORM_ATTRIB; ?>>
      <table border="0" class="flex">
      <tr>
        <td>
          <input type="tel" name="otp_1" value="<?php echo $_POST['otp_1']; ?>" maxlength="1" onKeyUp="tabindex(1)" required />
        </td>
        <td>      
          <input type="tel" name="otp_2" value="<?php echo $_POST['otp_2']; ?>" maxlength="1" onKeyUp="tabindex(2)" required />
        </td>      
        <td>      
          <input type="tel" name="otp_3" value="<?php echo $_POST['otp_3']; ?>" maxlength="1"  onKeyUp="tabindex(3)" required />
        </td>      
        <td>      
          <input type="tel" name="otp_4" value="<?php echo $_POST['otp_4']; ?>" maxlength="1"  onKeyUp="tabindex(4)" required />
        </td>
        <td>      
          <input type="tel" name="otp_5" value="<?php echo $_POST['otp_5']; ?>" maxlength="1"  onKeyUp="tabindex(5)" required />
        </td>      
        <td>      
          <input type="tel" name="otp_6" value="<?php echo $_POST['otp_6']; ?>" maxlength="1"  required />
        </td>
      </tr>
      </table>    
      <button type="submit" class="pri">Verify OTP</button>      
    </form>  
	</main>
<?php include_once 'inc/app_end.php'; ?>      
