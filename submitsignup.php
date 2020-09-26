<?php
$con = mysqli_connect("localhost","root","") or die("Error while connecting");
mysqli_select_db($con,"registration");

$name = $_POST['username'];
$email = $_POST['useremail'];
$pass = $_POST['userpassword'];
$Epass = md5($pass);
$phone = $_POST['userphone'];

$email_query = "select * from usertable where email = '$email'";
$phone_query = "select * from usertable where phone='$phone'";
$result1 = mysqli_query($con,$email_query);
$result2 = mysqli_query($con,$phone_query);
$num = mysqli_num_rows($result1);

$num2 = mysqli_num_rows($result2);

if($num == 1){
    echo "email id already registered";
}
elseif($num2 == 1){
    echo "Phone number already registered";
}
else{

    $reg = "insert into usertable (name,email,password,phone) values ('$name','$email','$Epass','$phone')";
    mysqli_query($con,$reg);
    header('location:login.php');

}
?>