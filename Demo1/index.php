<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("location: dangnhap.php");
    }
?>
<h1>hello world</h1>