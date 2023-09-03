<?PHP
$tb = 'user';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);
	
	$email_is_valid = validate_email($post['email']);
	
	if ($email_is_valid == true)
	{
		$email_exist = sql_select_one($db_con, $tb, 'email', $post['email']);
		
		if (is_array($email_exist))
		{
			$error = 'It appears the email you entered has already been registered';
			$errno = 100;
		}
		else
		{		
			$otp = App::set_otp($db_con, $post);
			
			$email_sent = send_mail('DPFIIT.org <admin@dpfiit.org>', $post['email'], 'OTP Code', $otp);
			
			if ($email_sent == true)
			{
				$_POST = NULL;
				
				$_SESSION['user'] = $post['email'];
						
				goto_page('app_signup.php');
			}
			else
			{
				$error = 'OTP code could not be sent to your email. Please check your internet connection';
				$errno = 300;		
			}
		}
	}
	else
	{
		$error = 'Please enter a valid email address';
		$errno = 400;		
	}
}

?>