<?PHP
$tb = 'user';
$dir = 'uploads/';

App::page_auth();

if ($_GET['u'] == true)
{
	$id = $_SESSION['user'];
	
	$post = sql_select_id($db_con, $tb, $id);	
	
	delete_file($post['passport'], $dir);
	
	sql_delete($db_con, $tb, 'ID', $id);		
	
	$_POST = App::safe_post($post);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{	
	$post = sanitize_request($_POST);
	
	if (strlen($_FILES['passport']['name']) > 4)
	{
		$post['surname'] = strtoupper($post['surname']);
		$post['names'] = ucwords($post['names']);	
		$post['passport'] = upload_file($_FILES['passport'], $dir);
		
		$db_res = sql_insert($db_con, $tb, $post);
		
		if (is_numeric($db_res)) 
		{		
			$_POST = NULL;
			
			$_SESSION['user'] = $db_res;
	
			goto_page('app_preview.php');
		}
		else
		{
			$error = $db_res;
			$errno = 400;		
		}
	}
	else
	{
		$error = 'Passport photo not uploaded';
		$errno = 300;		
	}	
}

$ddl_title = Enums::option(Lists::TITLE, $_POST['title']);

$ddl_sex = Enums::option(Lists::GENDER, $_POST['sex']);

$ddl_age = Enums::option(Lists::AGE_GROUP, $_POST['age']);

$enum_lgo = sql_column_distinct($db_con, $tb, 'lgo');
$hint_lgo = Enums::datalist($enum_lgo, 'hint_lgo');

$ddl_ca = Enums::option(Lists::BOOL, $_POST['ca']);

$ddl_cp = Enums::option(Lists::BOOL, $_POST['cp']);

$ddl_py = Enums::option($enum_py, $_POST['py']);

?>