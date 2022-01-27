<?php
     $conn=new mysqli('localhost','root','','demo1');
    if(isset($_POST['submit'])  && $_POST['username']!=''&& $_POST['password']!='' && $_POST['username']!='repassword'){
        //Thực hiện xử lý khi người dùng ấn nút submit và điền đầy đủ thông tin
       
        $username =$_POST["username"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $level = 0;
        if($password != $repassword){
            header("location:dangky.php");
        }else{
            $pass=md5($password);
        }
        $sql= "INSERT INTO user (username, password, level) VALUES('$username','$pass','$level')";

        if($conn->query($sql)==TRUE){
            echo "<script>alert('đăng ký thành công')</script>";
        }
      
    }else{
        header("location:dangky.php");
    }
?>