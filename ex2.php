


		
		<?php

$f=$_POST['sname'];
$l=$_POST['id'];
$n=$_POST['aadharcard'];
$e=$_POST['rationcard'];
$u=$_POST['phonenumber'];
$p=$_POST['dateofvaccination'];

$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("vaccineform",$conn);

 $query=("select * from v2 where b3='".$n."'");
		$result=mysql_query($query,$conn);
		echo $result;
		$rs='0';
		while(mysql_fetch_array($result))
		{
			$rs='1';
		}
		echo $rs;
		if($rs=='1')
		{
			//$_SESSION['user']=$_POST['userid'];
			header("location:vaccine2.html");
		}
		else
		{
			if (!$conn)
  {exit("Connection Failed: " . $conn);}    	
$qry="insert into v2 (b1,b2,b3,b4,b5,b6) values ('$f', '$l', '$n', '$e', '$u', '$p')";
 $res=mysql_query($qry,$conn);
			header("location:vaccineforms.html");
		}
 
 
 
 
 
 
?>  
                    
