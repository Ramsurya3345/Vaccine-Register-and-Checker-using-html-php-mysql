
		
		<?php

$f=$_POST['first'];
$l=$_POST['last'];
$n=$_POST['phone'];
$e=$_POST['email'];
$u=$_POST['userid'];
$p=$_POST['password'];

$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("vaccineform",$conn);
 $query=("select * from reg where userid='".$u."'");
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
			header("location:register.php");
		}
		else
		{
if (!$conn)
  {exit("Connection Failed: " . $conn);}


 
           $qry = "INSERT INTO reg (first, last, phone, email, userid, password) VALUES ('$f', '$l', '$n', '$e', '$u', '$p')";
           $result = mysql_query($qry, $conn);
		  
			header("location:vaccineforms.html");
		}
		
echo"Successfully Registered";
		   
        
?>                      