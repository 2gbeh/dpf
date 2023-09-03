<?php
	$tb = 'user';
	$dir = 'uploads/';
	
	$rows = sql_select_all($db_con, $tb);
	$sn = 0;
	
	foreach ($rows as $row)
	{
		$sn += 1;
		$row['passport'] = substr($row['passport'],0,3) == 'IMG'? $row['passport']: 'default.png';
		$img = $dir . $row['passport'];
		
		$buf .= '<tr>
			<td widtd="1">'.$sn.'</td>
			<td widtd="1"><a href="'.$img.'" target="_new">'.$row['passport'].'</a></td>
			<td>'. enum_f(Lists::TITLE, $row['title']).'</td>      
			<td>'.$row['surname'].'</td>
			<td>'.$row['names'].'</td>
			<td>'.$row['sex'].'</td>
			<td nw>'. enum_f(Lists::AGE_GROUP, $row['age']).'</td>
			<td>'.$row['lgo'].'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['phone'].'</td>
			<td nw>'.$row['DATE'].'</td>      
		</tr>';
	}
	
	$tbody = $buf;
?>