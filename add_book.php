<?php
  include '../connect.php';
  $book_name=$_POST['book_name'];
  $author_name=$_POST['author_name'];
  $publishing_house_name=$_POST['publishing_house_name'];
  $reference_number=$_POST['reference_number'];
  $count_book=$_POST['count_book'];
  $sql="SELECT * FROM books WHERE reference_number ='$reference_number'";
  $result =$conn->query($sql);
  $count=$result->num_rows;

 if ($count==1){
    header('location:http://localhost/library/new_book.php?re=1');
    exit();
  }

  $cover_photo=$_FILES['cover_photo']['name'];
  $cover_photo=date("mdYHis").'.'.pathinfo($cover_photo,PATHINFO_EXTENSION);
  $filetmb=$_FILES['cover_photo']['tmp_name'];
  $upload_file='../book/';
  move_uploaded_file($filetmb,$upload_file.$cover_photo);

 $sql="INSERT INTO books (book_name,author_name,publishing_house_name,reference_number,cover_photo,count_book)
 VALUES('$book_name','$author_name',' $publishing_house_name','$reference_number','$cover_photo','$count_book' )";
 $result2 = $conn->query($sql);
 header('location:http://localhost/library/new_book.php?re=2');
?>