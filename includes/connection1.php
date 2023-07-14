<?php


$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("hosireg",$conn);
if (!$conn)
  {exit("Connection Failed: " . $conn);} 
?>