<?php
$conn=mysqli_connect("localhost:3307","root","","rukku");
$result=mysqli_query($conn,"select * from webpage");
?>


<html>
<head>
<style>
h1{
color:red;
}
body{
background:url(https://www.imageshine.in/uploads/gallery/Free-vector-realistic-3d-podium-background-Wallpaper.jpg);
width:100%;
font-family:sans-serif;
}
h1{
font-style:cursive;
font-size:40px;
color:white;
position:absolute;
top:150px;
margin:50px;
}
b{
font-size:25px;
color:black;
position:absolute;
top:250px;
left:70px;
}
p{
font-size:15px;
color:black;
position:absolute;
top:290px;
left:70px;
}
img{
width:500px;
height:300px;
position:absolute;
top:250px;
right:200px;
}

a{
text-decoration:none;
position:absolute;
top:350px;
left:200px;
background-color:white;
margin:20px;
padding:20px;

}
a:hover{
background-color:black;
color:white;
}


</style>

</head>

<body>
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQTbbk7kuUw1rYS-cXol0LYo4JFdtf_3DaVg&usqp=CAU">
<?php

while($row=mysqli_fetch_array($result)){

echo "<h1>$row[heading]  </h1>";
echo "<b> $row[sub] </b>"; 
echo "<p> $row[para] </p>"; 



}

?>


<a href="">shop it</a>

</body>

</html>