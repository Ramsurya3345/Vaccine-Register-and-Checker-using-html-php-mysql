<?php
 $conn=mysql_connect('localhost', 'root', ''); 
 $db=mysql_select_db('vaccineform');
 $a=$_POST['search'];
 $b=$_POST['search'];
 $c=$_POST['search'];
 echo $a;
  $query=("select * from v2 where b4='".$a."'");
$rs=mysql_query($query,$conn);

// if(isset($_POST['button']))
 //{ 
 //trigger button click $search=$_POST['search'];
 ?>
 <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Vaccine Checker Second Vaccine</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	 </head>
<body>
 <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" ><img src="images/logo2.jpg" class="logo" alt=""></a>
                </div>
				    
                    <h1><b>Vaccine Checker</b>
					</h1>
                </center> 
				
				</align>
                </div>
            </div>
        </div>
    </div>
	</header>
 
 <table style="width:100%">
 <table border=1px solid black> 
  <thead>
    <tr>
      <th>Name</th>
      
      
	<th>Date of Vaccination</th>    
    </tr>
  </thead>
<?php

  if( mysql_num_rows( $rs )==0 ){
        echo '<tr><td colspan="3">Not Vaccinated</td></tr>';
      }
	  else
	  { 
       
			while( $row = mysql_fetch_assoc( $rs ) )
		{
          echo "<tr><td>{$row['b1']}</td><td>{$row['b6']}</td></tr>\n";
        }
      }
// }
 //mysql_close(); 
 ?>