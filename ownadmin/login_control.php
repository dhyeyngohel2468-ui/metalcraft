<?php

extract($_POST);

include_once 'db.php';

$uu = mysqli_query($oo,"select * from login_credentials where uname ='".$username."' and password='".$password."'");

if(mysqli_num_rows($uu) > 0) {
    session_start();
    $kk = mysqli_fetch_array($uu);
    $_SESSION['username'] = $kk['uname'];
    // $_SESSION['number'] = $kk=['age'];
    header('location:index.php');
}
else echo "Wrong username or password.";

?>