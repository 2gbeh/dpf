<?php include_once 'inc/app_top.php'; ?>  
  <main class="">
  	<section>
      <i class="fa fa-user-alt"></i>
      <h1>View Accounts</h1>    
      <p></p>   
    </section>    
      
    <table class="excel">
    <tr>
    	<th width="1">#</th>
    	<th>Passport</th>      
    	<th>Title</th>      
    	<th>Surname</th>
    	<th>Other Names</th>
    	<th>Sex</th>
    	<th>Age Group</th>
    	<th>L.G.A</th>
    	<th>Email Address</th>
    	<th>Phone No.</th>
    	<th>Reg. Date</th>      
    </tr>
    <?php echo $tbody; ?>
    </table>
	</main>
<?php include_once 'inc/app_end.php'; ?>      
