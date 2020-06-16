<?php
// include database connection file
include_once("koneksi.php");

// Getting id from url to delete that user
$id = $_GET['id'];

// Delete user now from table  based on given id
$result = mysqli_query($connect, "DELETE FROM user WHERE id=$id");

// After delete redirect to home, so that latest user list will be displayed
header ("Location:view.php");
?>