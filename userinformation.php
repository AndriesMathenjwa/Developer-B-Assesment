<?php

$connection = mysqli_connect('localhost','root');

mysqli_select_db($connection,"userinfodata");

$userNames = $_POST['userNames'];
$email = $_POST['email'];
$Complaint = $_POST['Complaint'];

$query = "INSERT INTO `complaints`(`userNames`,`email`,`Complaint`) VALUES ('$userNames','$email','$Complaint') ";

mysqli_query($connection,$query);

echo "MESSAGE IS SENT";

?>