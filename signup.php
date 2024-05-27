<?php
$c=mysqli_connect("localhost:3307","root","","rukku");
if(isset($_POST['register']))
{
$f=$_POST['fname'];
$l=$_POST['lname'];
$g=$_POST['gender'];
$n=$_POST['number'];
$a=$_POST['add'];
$e=$_POST['mail'];
$p=$_POST['password'];

$x=mysqli_query($c,"INSERT INTO students (fname,lname,gender,num,address,email,pass) VALUES ('$f','$l','$g','$n','$a','$e','$p')");
 
 
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
.signup{
position:absolute;
top:30px;
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
<div class="signup">
<h1>sign up</h1>
<h4>It's free and takes time</h4>
<form method="POST">
<label>First Name</label>
<input type="text" name="fname" required>
<label>Last Name</label>
<input type="text" name="lname" required>
<label>Gender</label>
<input type="text" name="gender" required>
<label>Contact Address</label>
<input type="tel" name="number" required>
<label>Address</label>
<input type="text" name="add" required>
<label>Email</label>
<input type="email" name="mail" required>
<label>Password</label>
<input type="password" name="password" required><br>
<input type="submit" name="register" value="submit">
</form>

<p>By clicking the signup nutton, you agree to our<br>
<a href="">Terms and Conditions</a>and<a href="">Policy Privacy</a>
</p>
<p>Already have an account?<a href="login.php">Login here</a></p>
</div>
</body>
</html>