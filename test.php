<?php
include '../connect.php';
$n1=$_POST[n1];
$n2=$_POST[n2];
$sql="SELECT * FROM users WHERE the_user='$n1' and the_password='$n2' ";
$result=$conn->query($sql);
$count=$result->num_rows;


if ($count==0){
    header('location:http://localhost/library/login.php');
    exit();
}
if ($count!==0){
    session_start();
    $_SESSION['library']=$n1;
    
    header('location:http://localhost/library/index.php');
    exit();
}
?>
