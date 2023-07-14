

<?php
$n=$_POST['sname'];
$i=$_POST['id'];
$x=$_POST['aadharcard'];
$r=$_POST['rationcard'];
$p=$_POST['phonenumber'];
$v=$_POST['dateofvaccination'];

$conn =mysql_connect ("localhost","root","");
$db=mysql_select_db("vaccineform",$conn);
$query=("select * from v3 where c3='".$x."'");
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
			header("location:vaccine3.html");
		}
		else
		{
if (!$conn)
  {exit("Connection Failed: " . $conn);}    	
$qry="insert into v3 (c1,c2,c3,c4,c5,c6) values ('$n', '$i', '$x', '$r', '$p', '$v')";
 $res=mysql_query($qry,$conn);
 	header("location:vaccineforms.html");
		}

?>