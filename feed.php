


		
		<?php

$n=$_POST['name'];
$e=$_POST['email'];
$s=$_POST['subject'];
$m=$_POST['message'];

$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("feedback",$conn);
if (!$conn)
  {exit("Connection Failed: " . $conn);}    	
$qry="insert into feed (name,email,subject,message) values ('$n', '$e', '$s', '$m')";
 $res=mysql_query($qry,$conn);
 echo"Sccessful"
?>  
                    
