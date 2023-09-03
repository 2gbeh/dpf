<?PHP
class App
{
	public static function set_otp ($db_con, $post) {
		$tb = 'otp';
		$otp = keygen();
		$email = $post['email'];
		$new_post = array('email'=>$email, 'otp'=>$otp);
		
		sql_delete($db_con, $tb, 'email', $email);
		sql_insert($db_con, $tb, $new_post);	
		return $otp;
	}
	
	public static function page_auth () {
		if (! isset($_SESSION['user']))
			goto_page('app_email.php');
	}
	
	public static function safe_post ($post) {
		$arr = array('passport','STATUS','DATE','ID');
		foreach ($post as $key => $value)
		{
			if (in_array($key, $arr))
				$post[$key] = NULL;
		}
		return $post;
	}		
	
	public static function avatar ($db_con, $id) {
		$tb = 'user';
		$row = sql_select_id($db_con, $tb, $id);			
		$buf = $row['sex'] == 'M'? '<b>Python</b>eer': '<b>Python</b>ista';
		
		$n = $id;
		$len = strlen($n);
		if ($len == 1)
			$buf .= '-000' . $n;
		else if ($len == 2)
			$buf .= '-00' . $n;
		else if ($len == 3)
			$buf .= '-0' . $n;
		else
			$buf = '-' . $n;		
		return $buf;
	}	
		
}
$new_app = new App();
?>