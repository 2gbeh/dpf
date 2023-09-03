<?PHP
$tb = 'user';
$dir = 'uploads/';

App::page_auth();

$id = $_SESSION['user'];

$row = sql_select_id($db_con, $tb, $id);

$passport = $dir . $row['passport'];
	
//var_dump($row);

if ($_GET['confirm'] == true)
{
	$handle = App::avatar($db_con, $id);
	
	goto_page('app_done.php?avatar=' . $handle);
}

if ($_GET['modify'] == true)
{
	goto_page('app_signup.php?u=true');
}

?>