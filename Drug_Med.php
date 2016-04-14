<?php 
$diss=$_POST["B_Drug"];
session_start();
//echo $diss;


ini_set('display_errors','on');
$db = mysqli_connect("localhost","root","root","pf");
$flag=0;
if(! $db ) {
      die('Could not connect: ' . mysql_error());
   }
   else
   {

   	$sql=mysqli_query($db,"select * from G_drug");
   	while($row = mysqli_fetch_array($sql))
    {
    	if($diss==$row['Branded_Drug'])
    	{
    		$_SESSION['b_d']=$row['Branded_Drug'];
    		$_SESSION['m_d']=$row['Generic_Drug'];
             $flag=1;
             break;
    	}
    }
    if($flag==1)
    {
       header('Location: Display_MDrug.php');


    }
    else
    {
    	$message="Drug Not present in database";
        echo "<script type='text/javascript'>alert('$message');
         window.location.href='home.php';
            </script>";
    }


   }

 ?>