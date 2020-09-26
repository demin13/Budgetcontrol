<?php
$con = mysqli_connect("localhost","root","");

mysqli_select_db($con,"registration");
$oldpass = $_POST['olduserpassword'];
$newpass = $_POST['newuserpassword'];
$confirmnewpass = $_POST['confirmnewpass'];

$Doldpass = md5($oldpass);
$Dnewpass = md5($newpass);
$Dconfirmnewpass = md5($confirmnewpass);

$p_qu = "select * from usertable where password = '$Doldpass'";
$result = mysqli_query($con,$p_qu);
$num1 = mysqli_num_rows($result);
if($num1==1){
    if($Dnewpass == $Dconfirmnewpass){
        $updat = "update usertable set password = '$Dnewpass' where password = '$Doldpass'";
        mysqli_query($con,$updat);
        header('location:login.php');
    }
    else{
        echo "New password and confirm new password do not match";
    }
}
else{
    echo "Invalid Old Password";
}

?>