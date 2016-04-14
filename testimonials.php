<?php
include ("array.php") ;
?>
<?php 
$name1=$_POST["name"];

$email1=$_POST["email"];
$disease1=$_POST["Dis"];
$mess=$_POST["message"];
//array_push($test,$mess);
//echo $test[20];

?>
<?php
$counter++;
ini_set('display_errors','on');
$db = mysqli_connect("localhost","root","root","pf");
if(! $db ) {
      die('Could not connect: ' . mysql_error());
   }
 else
 {
 $sql="INSERT INTO my(name,email,disease,testimonial) VALUES('$name1','$email1','$disease1','$mess')";
if(mysqli_query($db, $sql))
{
    
    $message="Successfully added Testimonial.";
    echo "<script type='text/javascript'>alert('$message');
    window.location.href='home.php';
    </script>";


} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
}
}
?>

<html>
<body>
<h1> The Name is <?php echo $name1; ?> </h1>
<h2> Email is <?php echo $email1;?> </h2>
<h3> Disease is <?php echo $disease1; ?> </h3>
</body>
</html>  