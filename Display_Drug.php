<?php 

session_start();
 //echo $_SESSION["img"];
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="drug_style.css">
</head>
<style type="text/css">
table {
    width: 80%;
     margin-top:200px;
     margin-left:100px;
    
}


</style>

<div class="menu-wrap">
    <nav class="menu">
        <ul class="clearfix">
            <li><a href="home.php">Home</a></li>
            <li>
                <a href="#">Testimonials <span class="arrow">&#9660;</span></a>
                <ul class="sub-menu">
                    <li><a href="signup.php">Post a Testimonial </a></li>
                    <li><a href="display_testimonials.php">Display a Testimonial</a></li>
                    
                </ul>
            </li>
            <li><a href="#">Find a Generic Drug <span class="arrow">&#9660;</span></a>
            <ul class="sub-menu">
                <li><a href="disease.php">Find by Disease</a>
                  <ul class="sub-menu1">
                     <!--<li><a href="#"> Heart Diseases </a></li>
                     <li><a href="#"> Digestive System </a></li>-->
                  </ul>
                  </li>

                <li><a href="medicine.php">Find by medicine</a></li>
                </ul></li>
            <li ><a href="#">Contact</a></li>
            <li><a href="#">Site Help</a></li>
        </ul>
    </nav>
</div>
<body >

<table border="10" bgcolor="#D4FF33">

<tr>
<th> Disease</th>
<th> Generic_Drug</th>
<th> Link </th>
</tr>
<tr >
<td> <b><u><?php echo $_SESSION['dis']; ?></b></u> </td>
<td >  <b><u><?php echo $_SESSION['med']; ?></b></u> </td>
<td> <a  target='_blank' href="http://www.drugs.com/<?php echo $_SESSION['med']; ?> " ><?php echo $_SESSION['med'];?></a></td>
</tr>


</table>
</body>
</html>
