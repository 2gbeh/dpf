<?PHP
Context::set(NULL,'index.html');

Context::set('Introduction','app_about.php');

Context::set('Email Address','app_email.php');

Context::set('OTP Code','app_verify.php');

Context::set('Registration Form','app_signup.php');

Context::set('Preview Form','app_preview.php');

Context::set('Registration Complete','app_done.php');

Context::set('View Accounts','app_users.php');

Context::set('View OTP Codes','app_otps.php');

//Context::map();
extract(Context::get());
?>
