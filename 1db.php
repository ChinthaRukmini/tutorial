<?php 

$conn=mysqli_connect("localhost:3307","root","","rukku");
if($conn){
    echo "connected";
}
$query="create database novfeb2";
if(mysqli_query($conn,$query)){
    echo "data base created";
}
else{
    echo "not created";
}
?>