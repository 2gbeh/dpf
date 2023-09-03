<?PHP
# 
$db_con = connect_db(USERNAME, PASSWORD, DATABASE);

# 
Anum::main(HOSTED);

# 
$sizeof_user = sql_count($db_con, 'user');

#
$enum_py = array(NULL,
	'Artificial Intelligence',
	'Data Analytics/Data Science',
	'Game Development',
	'Hardware Programming',
	'Machine Learning',
	'Mobile App Development',
	'Software Engineering',
	'Web Application Development'
);



?>