
 <br><br><br>
   <html>
     <body style="background-color:Sienna;">
     </body>
   </html>
<form method="post" >

         <label>numer_book</label><br>
         <input type="text" name="num"><br><br>

         <label>book_title</label><br>
         <input type="text" name="booktitle"><br><br>

         <label>author_name</label><br>
         <input type="text" name="authorname"><br><br>

         <label>date</label><br>
         <input type="text" name="ddate"><br><br>

         
         <input type="submit" name="edit" value="edit"><br><br>
</form>

<?php
   
   include 'list.php';
?>

<?php
  if(isset($_POST['edit'])){
    $conn=mysqli_connect("localhost","root","","library");
    $num=$_POST['num'];
    $booktitle=$_POST['booktitle'];
    $authorname=$_POST['authorname'];
    $ddate=$_POST['ddate'];
    $edit=mysqli_query($conn,"UPDATE `book` SET num='$num',booktitle='$booktitle',authorname='$authorname',ddate='$ddate' WHERE num='$num'");
    if($edit){
        echo "تم التعديل ع الكتاب";
       
    }
  }
?>