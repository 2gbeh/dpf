<?php
	$tb = 'otp';
	
	$rows = sql_select_all($db_con, $tb);
	$sn = 0;
	
	foreach ($rows as $row)
	{
		$sn += 1;
		
		$buf .= '<tr>
			<td widtd="1">'.$sn.'</td>
			<td>'.$row['email'].'</td>
			<td>'.$row['otp'].'</td>			
			<td nw>'.$row['DATE'].'</td>      
		</tr>';
	}
	
	$tbody = $buf;
?>