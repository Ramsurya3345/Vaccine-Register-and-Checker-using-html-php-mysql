<?php 
//session_start();
//require_once('connection.php');
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("vaccineform",$conn);
if (!$conn)
  {exit("Connection Failed: " . $conn);}

$uname=$_POST['userid'];
$pword=$_POST['password'];
echo $uname;
echo $pword;

$query=("select * from reg where userid='".$uname."' and password='".$pword."'");
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
			header("location:vaccineforms.html");
		}
		else
		{
			header("location:login.php");
		}

		

 ?>
 