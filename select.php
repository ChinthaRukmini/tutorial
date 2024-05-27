<?php

$link = mysqli_connect("localhost:3307", "root", "", "rukku");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "SELECT * FROM persons";
if(mysqli_query($link, $sql)){
    echo "selected successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>