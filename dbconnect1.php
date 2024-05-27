<?php 
$conn=mysqli_connect("localhost:3307","root","","rukku");
if($conn){
   echo "connected";
}
else{
echo "not connected";
}
?>