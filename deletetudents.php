<?php
include 'connect.php';
$userid = $_GET['userid'];
$sql = "DELETE FROM `user` WHERE userid = $userid";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
header('location:students.php');
?>
