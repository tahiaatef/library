<?php
include '../connect.php';
$m1=$_POST[m1];
$m2=$_POST[m2];
$sql="SELECT * FROM admin WHERE admin_name='$m1' and the_password='$m2' ";
$result=$conn->query($sql);
$count=$result->num_rows;


if ($count==0){
    
    header('location:http://localhost/library/admin.php');
    echo "انت مش الادمن لااااااااا";
    exit();
}
if ($count!==0){
    session_start();
    $_SESSION['library']=$m1;
    
    header('location:http://localhost/library/personal.php?re=');
    exit();
}
?>