
<?php


include "connection.php";

$v=$_GET['rl'];
$x=mysqli_query($con,"delete from task where task='$v'");

header("location:dash3.php");



?>


