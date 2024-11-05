<?php

include_once("connection.php");

$name = $_POST["name"];
$email = $_POST["email"];
$phone_no = $_POST["phoneno"];
$comment = $_POST["message"];

$query = "INSERT INTO userdatainfo(name, email, phoneno, comment) VALUES ('$name','$email','$phone_no','$comment')";
header('location: index.html');
mysqli_query($con, $query);
?>