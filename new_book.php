<html>
   <head>
     <title>اضافه كتاب جديد</title>
  </head>


  <body style="background-color:Sienna;">
     <center>
       <?php
         include 'list.php';
         include 'cs.cs';
         $re=$_GET['re'];
        
        ?>
        <div id="d5"style="width: 100%;height: 500px;">
          <br><br> 
           
          <h1>اضافه كتاب جديد</h1>


           <form style="width: 500px ;" method="post" action="fun/add_book.php" enctype="multipart/form-data">
             <div>
                  <?php
                      $re=$_GET['re'];
                     if($re==1){
                        echo "الكتاب مضاف مسبقا";
                     } 
                     if($re==2){
                      echo "تمت اضافه الكتاب بنجاح";
                   }
                  ?>
              </div>
             <div>
                  <input class="f75"  type="text" name="book_name" placeholder="اسم الكتاب">  
                  <lable class="f25">اسم الكتاب</lable><br>
             </div>
              <br> 

             <div>
                 <input class="f75"  type="text" name="author_name"  placeholder="اسم الموءلف">  
                 <lable class="f25">اسم الموءلف</lable><br>
             </div>
              <br>

             <div>
                  <input class="f75"   type="text" name="publishing_house_name"  placeholder="اسم دار النشر">  
                  <lable class="f25">اسم دار النشر</lable><br>
             </div>
              <br>


              <div>
                  <input class="f75"   type="text" name="reference_number"  placeholder="الرقم المرجعي">  
                  <lable class="f25">الرقم المرجعي</lable><br>
             </div>
              <br>

              <div>
                  <input class="f75"   type="text" name="count_book"  placeholder="عدد النسخ">  
                  <lable class="f25">عدد النسخ</lable><br>
             </div>
              <br>

              <div>
                  <input class="f75"   type="file" name="cover_photo" >  
                  <lable class="f25">صوره الغلاف</lable><br>
             </div>
              <br>  

              <div>
                  <input style="width: 150px;" type="submit" name="submit" value="اضافه الكتاب">  
              </div>
              <br>
          </form>
        </div>
     </center>                                                                                                                                                          
  </body>

</html>