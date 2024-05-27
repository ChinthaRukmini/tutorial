<?php

$link = mysqli_connect("localhost:3307", "root", "", "rukku");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Attempt insert query execution
$sql = "INSERT INTO persons (id,first_name,last_name,email) VALUES
(1,'sai','Chattaa','sai1807@gmail.com'),
(2,'Rukku','Chintha','rukku1807@gmail.com'),
(3,'Janu','Chintha','chinthajanu12@gmail.com'),
(4,'Sairam','chintha','sairam@gmail.com'),
(5,'lakshman','chintha','lakshman123@gmail.com'),
(6,'madhavi','chatta','madhu123@gmail.com')";

if(mysqli_query($link, $sql)){
   echo "Records inserted successfully.";
} else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>