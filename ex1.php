<?php
		

$n=$_POST['sname'];
$f=$_POST['fathersname'];
$d=$_POST['dob'];
$a=$_POST['age'];
$g=$_POST['gender'];
$b=$_POST['bloodgroup'];
$i=$_POST['id'];
$x=$_POST['aadharcard'];
$r=$_POST['rationcard'];
$p=$_POST['phonenumber'];
$e=$_POST['emailid'];
$s=$_POST['address'];
$c=$_POST['city'];
$v=$_POST['dateofvaccination'];

$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("vaccine1",$conn);
$query=("select * from vacc where a7='".$x."'");
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
			header("location:vaccine1.html");
		}
		else
		{
if (!$conn)
  {exit("Connection Failed: " . $conn);}    	
$qry="insert into vacc (a1,a2,a3,a4,g,a5,a6,a7,a8,a9,a10,a11,a12,a13) values ('$n', '$f', '$d', $a', '$g', '$b', '$i', '$x', '$r', '$p', '$e', '$s', '$c', '$v')";
 $res=mysql_query($qry,$conn);
 
			header("location:vaccineforms.html");
		
		}
?>  
                    

