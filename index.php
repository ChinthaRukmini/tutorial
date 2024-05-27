<?php

$c= new mysqli("localhost:3307","root","","rukku");

?>

<table border="1px">

<tr>

<th>name</th>
<th>email</th>
<th>password</th>
</tr>
<?php

$x=$c->query("select * from registers");
while ($a=$x->fetch_assoc()){
 echo "<TR>";
 
 echo "<td> $a[user] </td>";
  echo "<td> $a[email] </td>";
 echo "<td> $a[pass] </td>";
 
echo "</TR>";
}


?>

</table>




