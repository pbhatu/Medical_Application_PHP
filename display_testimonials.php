<html>

<body bgcolor="#E6E6FA">
  <center>
  <h1> <u> Testimonials </u> </h1>
</center>
<?php
//$_SESSION_start();
$counter=0;
function display($test,$counter)
{
   // <div class="test_style">
     //echo nl2br($test); 
     //echo $counter;
    //</div>
}
?>
<?php
ini_set('display_errors','on');
$db = mysqli_connect("localhost","root","root","pf");
if(! $db ) {
      die('Could not connect: ' . mysql_error());
   }
   else
   {
    $query = mysqli_query($db,"select * from my");
    
    while($row = mysqli_fetch_array($query))
    {
        //<div class="test_style">
       $namei=$row['name'];
    	 $testi=$row['testimonial'];
       

       //echo $_SESSION['t_m'];
      // display($testi,$counter++);
       echo "<b><p style=\"margin-left:30px; margin-bottom:0px; text-align:left;\" >~ ".$namei."</p></b>" ;
       echo  "<p style=\"margin-left:10px; border:2px solid gray; width: 500px; padding 10px; \">".$testi."</p>";
        
       //echo "<div>".$row['testimonial']."</div>";
      //echo $testi;
   }
   
 }
   ?>





 </body>
 </html>