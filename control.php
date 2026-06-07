<?php

extract($_POST);
include_once 'ownadmin/db.php';
$o = mysqli_query($oo, "insert into appointment (name,email,mobile,service,message) values ('".$name."', '".$email."','".$mobile."','".$service."','".$message."')");

if ($o > 0) {
    header("location:index.php");
}
else{
    echo "Pappu fail.";
}   
?>

