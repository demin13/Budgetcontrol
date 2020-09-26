<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"registration");
$email = $_POST['useremail'];
$pass = $_POST['userpassword'];

$Dpass = md5($pass);
$q1 ="select * from usertable where email = '$email' && password = '$Dpass'";
$result = mysqli_query($con,$q1);
$num = mysqli_num_rows($result);
if($num == 1){
    header('location:home.php');
}
else{
    echo"login details invalid";
}

?>