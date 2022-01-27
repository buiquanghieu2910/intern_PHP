<?php
    session_start();
   
    if(isset($_POST['submit'])  && $_POST['username']!=''&& $_POST['password']!=''){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $conn=new mysqli('localhost','root','','demo1');
        $pass=md5($password);
        $sql= "SELECT * FROM user WHERE username='$username' AND password='$pass' limit 1";
        $result=$conn->query($sql);
        if($result->num_rows>0){
            echo "<script>alert('đăng nhập thành công')</script>";
            $_SESSION['user'] = $username;
            header("location: listUsers.php");
        }else{
            echo "<script>alert('Thất bại')</script>";
            // header("location: dangnhap.php");
        }
    }else{
        header("location: login.php");
    }
