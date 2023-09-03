<?PHP
$tb = 'otp';

App::page_auth();

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);

	$post['otp'] = implode('',$post);
	
	$db_res = sql_select_one($db_con, $tb, 'otp', $post['otp']);
	
	if (is_array($db_res)) 
	{
		$_POST = NULL;
				
		goto_page('app_signup.php');
	}
	else
	{
		$error = 'Invalid OTP code. Try again';
		$errno = 400;		
	}
}
?>
