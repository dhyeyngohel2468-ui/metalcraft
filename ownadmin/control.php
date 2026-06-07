<?php

extract($_POST);
include_once 'db.php';
$o = mysqli_query($oo, "insert into web_services(title,img_path,description,charges,longdesc) values ('".$title."', '".$img_path."','".$description."','".$charges."','".$longdesc."')");

if ($o > 0) {
    header("location:index.php");
}
else{
    echo "Pappu fail.";
}
?>

