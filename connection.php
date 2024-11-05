
<?php
error_reporting(0);
$server="localhost";
$username="root";
$password="";
$dbname="userdata";

$con=mysqli_connect($server,$username,$password,$dbname);
if($con)
echo"";
else
mysqli_connect_error($con);
?>