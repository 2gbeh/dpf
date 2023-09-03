<?php include_once 'inc/app_top.php'; ?>
  <main class="compact">
  	<section>
      <i class="fa fa-address-book"></i>
      <h1>Registration Form</h1>    
      <p>
	      Kindly fill the enclosed form. <!--with your most accurate biodata., 
        functional email address and WhatsApp number. -->     
      </p>   
    </section> 
      
    <form class="stem" <?php echo FORM_ATTRIB; ?>>    
   <label>Upload Passport:</label>
     <div class="overlay">
      <input type="file" name="passport" accept="image/*" required /> 
        <i class="fas fa-smile"></i>
      </div>
      
     <label>Select Title:</label>
      <div class="overlay">
        <select name="title" required>
          <option></option>
          <?php echo $ddl_title; ?>
        </select>
        <i class="fas fa-award"></i>
      </div>      
   
      <label>Surname:</label>
      <div class="overlay">
        <input type="text" name="surname" value="<?php echo $_POST['surname']; ?>" required />
        <i class="fa fa-user-alt"></i>
      </div>
      
     <label>Other Names:</label>
      <div class="overlay">
        <input type="text" name="names" value="<?php echo $_POST['names']; ?>" required />
        <i class="fa fa-address-book"></i>
      </div>   
      
     <label>Select Gender:</label>
      <div class="overlay">
        <select name="sex" required>
          <option></option>
          <?php echo $ddl_sex; ?>
        </select>
        <i class="fa fa-transgender-alt"></i>
      </div> 
      
     <label>Select Age Group:</label>
      <div class="overlay">
        <select name="age" required>
          <option></option>
          <?php echo $ddl_age; ?>
        </select>
        <i class="fas fa-baby"></i>
      </div>  
      
     <label>LGA of Origin:</label>
      <div class="overlay">
        <input type="search" name="lgo" value="<?php echo $_POST['lgo']; ?>" list="hint_lgo" required />
        <?php echo $hint_lgo; ?>
        <i class="fas fa-map-marker-alt"></i>
      </div>
      
     <label>Email Address:</label>
      <div class="overlay">
        <input type="email" name="email" value="<?php echo $_POST['email']? $_POST['email']: $_SESSION['user']; ?>" placeholder="example@domain.com" required />
        <i class="fa fa-envelope"></i>
      </div>
      
     <label>Mobile Number:</label>
      <div class="overlay">
        <input type="tel" name="phone" value="<?php echo $_POST['phone']; ?>" placeholder="WhatsApp No." maxlength="15" required />
        <i class="fas fa-mobile-alt"></i>
      </div>  
  
     <label>Do you have any prior experience in Computer Appreciation?</label>
      <div class="overlay">
        <select name="ca" required>
          <option></option>
          <?php echo $ddl_ca; ?>
        </select>
        <i class="fas fa-laptop-code"></i>
      </div>
      
     <label>Do you have any prior experience in Computer Programming?</label>
      <div class="overlay">
        <select name="cp" required>
          <option></option>
          <?php echo $ddl_cp; ?>
        </select>
        <i class="fas fa-code"></i>
      </div>   
              
     <label>Which of the following application areas of Python are you most interested in?</label>
      <div class="overlay">
        <select name="py" required>
          <option></option>
          <?php echo $ddl_py; ?>
        </select>
        <i class="fa fa-star"></i>
      </div>     
    
    	<p></p>
      <button type="submit" class="pri">Register</button>      
    </form>  
	</main>    
<?php include_once 'inc/app_foot.php'; ?>      
