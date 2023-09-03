<?php include_once 'inc/app_top.php'; ?>
  <main class="compact">  
		<figure>
      <div style="background-image:url(<?php echo $passport; ?>);" title="Passport"></div>
      <figcaption>Passport Photo</figcaption>
		</figure>
    
    <form class="stem">
      <table border="0" class="profile">
        <tr>
          <td width="1"><i class="fas fa-graduation-cap"></i></td>
          <td>
            <?php echo enum_f(Lists::TITLE, $row['title']); ?>
            <small>Title</small>
          </td>
        </tr>
        <tr>
          <td><i class="fa fa-user-alt"></i></td>
          <td>
            <?php echo $row['surname']; ?>
            <small>Surname</small>
          </td>
        </tr>
        <tr>
          <td><i class="fa fa-address-book"></i></td>
          <td>
            <?php echo $row['names']; ?>
            <small>Other Names</small>
          </td>
        </tr>
        <tr>
          <td><i class="fa fa-transgender-alt"></i></td>
          <td>
            <?php echo enum_f(Lists::GENDER, $row['sex']); ?>
            <small>Gender</small>
          </td>
        </tr>   
        <tr>
          <td><i class="fas fa-baby"></i></td>
          <td>
            <?php echo enum_f(Lists::AGE_GROUP, $row['age']); ?>
            <small>Age Group</small>
          </td>
        </tr>
        <tr>
          <td><i class="fas fa-landmark"></i></td>
          <td>
            <?php echo $row['lgo']; ?>
            <small>L.G.A of Origin</small>
          </td>
        </tr> 
        <tr>
          <td><i class="fa fa-envelope"></i></td>
          <td>
            <?php echo $row['email']; ?>
            <small>Email Address</small>
          </td>
        </tr> 
        <tr>
          <td><i class="fas fa-phone fa-flip-horizontal"></i></td>
          <td>
            <?php echo $row['phone']; ?>
            <small>WhatsApp No.</small>
          </td>
        </tr> 
        <tr>
          <td><i class="fas fa-laptop-code"></i></td>
          <td>
            <?php echo enum_f(Lists::BOOL, $row['ca']); ?>
            <small>Prior Computer Appreciation?</small>
          </td>
        </tr> 
        <tr>
          <td><i class="fas fa-code"></i></td>
          <td>
            <?php echo enum_f(Lists::BOOL, $row['cp']); ?>
            <small>Prior Computer Programming?</small>
          </td>
        </tr> 
        <tr>
          <td><i class="fa fa-heart"></i></td>
          <td>
            <?php echo enum_f($enum_py, $row['py']); ?>
            <small>Python Domain Interest</small>
          </td>
        </tr>     
      </table>    
      <p></p>    
      <a href="?confirm=true" class="btn">Confirm</a>
      <p></p>
      <a href="?modify=true" class="lnk">Modify Form</a>      
    </form>
	</main>        
<?php include_once 'inc/app_foot.php'; ?>      

