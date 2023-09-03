<?PHP
// CONSTANTS
define('APPNAME', 	'D-Peterson Institute of Information Technology (DPFIIT)');
define('ALIAS', 		'DPFIIT.org');
define('CAPTION', 	'Delta State Lets\'s Go!');
define('COMPANY', 	'D-Peterson Foundation');
define('SUMMARY', 	'An initiative by D-Peterson Foundation to train and empower 1,200 undergraduates from Ika South Local Government, Agbor-obi, Delta State.');
define('KEYWORDS', 	'd peterson foundation, d peterson institute of information technology, dpf, dpfiit, dpiit, computer school agbor, computer school delta state, college of education agbor, donald peterson, hwp labs, tugbeh emmanuel');
define('COPYRIGHT',	'Copyright &copy; 2021 '.COMPANY);
define('EMAIL',			'info@dpfiit.org');
define('EMAIL_2',		'admin@dpfiit.org');
define('PHONE',			'08163806238');
define('PHONE_2',		'08037383019');
define('PHONE_3',		'08169960927');
define('ADDRESS',		'P.M.B 2090 College of Education, Agbor, Delta State, Nigeria.');
define('THEME_PRI',	'#000');
define('THEME_SEC',	'');
define('THEME_ALT',	'#D8E262');

// APACHE
define('SERVER', 		'dpf');
if ($_SERVER['SERVER_NAME'] == 'localhost') 
{
	define('DATABASE',	SERVER.'_db');	
	define('USERNAME',	'root');
	define('PASSWORD',	'');
} 
else 
{
	define('DATABASE',	'shagoapp_dpf_db');
	define('USERNAME',	'shagoapp_dpf_root');
	define('PASSWORD', 	'_Strongp@ssw0rd');
}

// ISP
define('INDEX', 			'index.php');
define('DOMAIN', 			'dpfiit.org');
define('CPANEL', 			'https://'.DOMAIN.'/cpanel');
define('WEBMAIL', 		'https://'.DOMAIN.'/webmail');;
define('WEBMAIL_1',		'info@'.DOMAIN);
define('WEBMAIL_2',		'support@'.DOMAIN);
define('WEBMAIL_3',		'admin@'.DOMAIN);
define('VERSION',			'2.2.2.21');
define('HOSTED',			'2021-02-02');
define('REVISED',			'2022-02-01');

// META TAGS
$m = array();
$m['author'] =					'HWP Labs';
$m['classification'] = 	'Registration Portal';
$m['copyright'] = 			date('Y');
$m['coverage'] = 				'Nigeria';
$m['description'] = 		SUMMARY;
$m['designer'] = 				'Tugbeh, E.O.';
$m['keywords'] = 				KEYWORDS;
$m['language'] = 				'en';
$m['owner'] = 					COMPANY;
$m['reply_to'] = 				WEBMAIL_1;
$m['revised'] = 				REVISED;
$m['robots'] = 					'index,follow';
$m['theme_color'] = 		THEME_ALT;
$m['url'] = 						'https://'.DOMAIN.'/';
$m['viewport'] = 				isset($page_ctx_viewport)? '': 'width=device-width, initial-scale=1.0';
$m['title'] = 					! isset($page_ctx_title)? APPNAME: $page_ctx_title.' - '.ALIAS;
$META = (object)$m;
?>