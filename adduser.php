<?php
include '../connect.php';
$the_user=$_GET['the_user'];
$sql="SELECT * FROM users WHERE the_user ='$the_user'";
$result=$conn->query($sql);
$count=$result->num_rows;

if ($count==1){
    header('location:http://localhost/library/sign_up.php?re=1');
    exit();
}

$email=$_GET['email'];
$the_phone=$_GET['the_phone'];
$stage=$_GET['stage'];
$the_password=$_GET['the_password'];
$reset_password=$_GET['reset_password'];
if($the_password !== $reset_password){
    
    header('location:http://localhost/library/sign_up.php?re=2');
    echo "كلمه السر غير صحيحه";
    exit();
}
$notes=$_GET['notes'];

$sql="INSERT INTO users (the_user,email,the_phone,stage,the_password,notes)
VALUES('$the_user','$email','$the_phone','$stage','$the_password','$notes' )";
$result2 = $conn->query($sql);
header('location:http://localhost/library/login.php?re=');
?>