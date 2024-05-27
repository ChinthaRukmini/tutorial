<?php
$c= mysqli_connect("localhost:3307","root","","rukku");

if(isset($_POST['login']))
{

$e=$_POST['mail'];
$p=$_POST['password'];



$x=mysqli_query($c,"select * from students where email='$e' and pass='$p'");
if( $x->num_rows>0){
 header("location:4.php");
}
else {
echo "wrong details";
}
}
?>
<html>
<head>
<style>
body{
background:url(background.png);
width:100%;
font-family:sans-serif;
}
form{
display:grid;
}
input{
width:300px;
height:30px;

}
.login{
position:absolute;
top:150px;
left:600px;
background-color:white;
padding:20px;
}

input[type="submit"]:hover{
background:transparent;
background-color:orange;
}
</style>
</head>

<body>
<div class="login">
<h1>Login</h1>
<h4>It's free and takes time</h4>
<form method="POST">



<label>Email</label>
<input type="email" name="mail" required>
<label>Password</label>
<input type="password" name="password" required><br>
<input type="submit" name="login" value="submit">

</form>

<p>Not have an account?<a href="signup.php">Sign Up here</a></p>
</div>
</body>
</html>