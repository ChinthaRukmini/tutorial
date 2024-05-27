<?php

$link = mysqli_connect("localhost:3307", "root", "", "rukku");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt create table query execution
$sql = "UPDATE persons SET first_name='likhitha' WHERE id=5";
if(mysqli_query($link, $sql)){
    echo "updated successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>