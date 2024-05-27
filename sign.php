<?php
$c=mysqli_connect("localhost:3307","root","","rukku");
if(isset($_POST['register']))
{
$u=$_POST['u'];
$e=$_POST['e'];
$p=$_POST['p'];



$x=mysqli_query($c,"INSERT INTO registers (user,email,pass) VALUES ('$u','$e','$p')");
 
 
}

?>
<form method="post">
<input type="text" name="u">
<input type="text" name="e">
<input type="text" name="p">
<input type="submit" name="register">
</form>