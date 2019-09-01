
<?php
session_start();
include_once 'dbh.php';

$userid = $_POST['userid'];
$province = $_POST['province'];
$pwd = $_POST['pwd'];

    $sql = "SELECT * FROM sign WHERE pwd='$pwd' AND id='$userid' AND province='$province';";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)   {
    while ($row = mysqli_fetch_assoc($result)){
       $uid = $row['id'];
       $fname = $row['fname'];
       $lname = $row['lname'];
       $prov = $row['province'];
        $sql = " INSERT INTO logged (userid, fname, lname, province) 
        VALUES ('$uid', '$fname', '$lname', '$prov');";
        mysqli_query($conn, $sql);
        header("Location: category.php");
    
    }
}else{
    echo "First you need to signup !";
}
