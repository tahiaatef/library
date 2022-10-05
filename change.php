<?php
  include '../connect.php';
  $n1=$_POST['n1'];
  $n2=$_POST['n2'];
  $n3=$_POST['n3'];
       session_start();
       $the_user=$_SESSION['library'];
  $sql="SELECT * FROM users WHERE the_user ='$the_user'";
  $result=$conn->query($sql);
             while ($row=$result->fetch_assoc()) {
                  $the_password=$row['the_password'];
              }
    if($n1 <> $the_password){
        header('location:http://localhost/library/pass.php?re=1');
        exit();
    }
    if($n3!== $n2){
      header('location:http://localhost/library/pass.php?re=2');
      exit();
    }
  $sql = "UPDATE users SET the_password='$n3'  where the_user='$the_user'";
  $result =$conn->query($sql);
    header('location:http://localhost/library/personal.php');

?>    

