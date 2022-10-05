
   <br><br><br>
   <html>
     <body style="background-color:Sienna;">
             <form method="post">
                 <label>numer_book</label><br>
                 <input type="text" name="num"><br><br>

                 <label>book_title</label><br>
                 <input type="text" name="booktitle"><br><br>

                 <label>	author_name</label><br>
                 <input type="text" name="authorname"><br><br>

                 <label>date</label><br>
                 <input type="text" name="ddate"><br><br>

                 <input type="submit" name="delete" value="delete"><br><br>
             </form>
     </body>
   </html>
   
         
  <?php
      
      include 'list.php';
   ?>
  
  <?php
  if(isset($_POST['delete'])){
    $conn=mysqli_connect("localhost","root","","library");
    $num=$_POST['num'];
    $booktitle=$_POST['booktitle'];
    $authorname=$_POST['authorname'];
    $ddate=$_POST['ddate'];
    $del=mysqli_query($conn,"DELETE FROM `book` WHERE booktitle='$booktitle';");
    if($del){
        echo "تم حذف الكتاب بنجاح";
      
    }
  }
?>





  

