<?php
$c= mysqli_connect("localhost:3307","root","","rukku");

if(isset($_POST['login']))
{
$u=$_POST['user'];
$e=$_POST['email'];
$p=$_POST['password'];



$x=mysqli_query($c,"select * from registers where user='$u' and email='$e' and pass='$p'");
if( $x->num_rows>0){
 header("location:4.php");
}
else {
echo "wrong details";
}
}
?>
<form method="POST">
<input name="user" placeholder="user">
<input name="email" placeholder="email">
<input name="password" placeholder="password">
<input type="submit" name="login">
</form>