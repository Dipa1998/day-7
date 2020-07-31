<?php
require 'connect.inc.php.txt';
$query="SELECT 'food' , 'calories' FROM 'food' ORDER BY 'id' ";
if($query_run=mysql_query($query)){
	while($row=mysql_fetch_assoc($query_run)){
     $food=$query_row['food'];
     $calories=$query_row['calories'];
     echo $food.'has'.$calories.'calories.<br>';
	}

}else{
	echo mysql_error($query_run);
}

?>