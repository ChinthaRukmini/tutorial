<?php
$conn=mysqli_connect("localhost:3307","root","","rukku");
$result=mysqli_query($conn,"select * from thinkchamp");
?>

<html>
<head>
<style>
h1{
color:red;
}
</style>

</head>

<body>

<?php

while($row=mysqli_fetch_array($result)){

echo "<h1>$row[heading]  </h1>";
echo "<h5> $row[sub] </h5>"; 
echo "<h5> $row[para] </h5>"; 



}

?>




</body>

</html>