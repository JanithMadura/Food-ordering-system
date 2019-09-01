<?php
include_once 'dbh.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$province = $_POST['province'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO sign (fname, lname, age, province, pwd) 
VALUES ('$fname', '$lname', '$age', '$province', '$pwd')";
mysqli_query($conn, $sql);

echo "You are signed in";
