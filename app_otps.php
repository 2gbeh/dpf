<?php include_once 'inc/app_top.php'; ?>  
  <main class="">
  	<section>
      <i class="fas fa-mask"></i>
      <h1>View OTP Codes</h1>    
      <p></p>   
    </section>    
      
    <table class="excel">
    <tr>
    	<th width="1">#</th>
    	<th>Email Address</th>
    	<th>OTP</th>
    	<th>Reg. Date</th>      
    </tr>
    <?php echo $tbody; ?>
    </table>
	</main>
<?php include_once 'inc/app_end.php'; ?>      
