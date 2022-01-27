
<?php
include 'dangnhap_submit.php'; 
if(!empty($_SESSION['user']))
{
    session_unset();
    // header("location: dangnhap.php");
    // echo "<script>window.location='dangnhap.php'</script>";
    echo "<script>alert('Đã xóa Session')</script>";
}
else{
    echo "<script>alert('ủa alo')</script>";
}
