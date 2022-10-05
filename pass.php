<html>
  <head>
    <title>المكتبه الالكترونيه</title>
  </head>


 <body style="background-color:Sienna;">
     <center>
          <?php
         include 'cs.cs';
         include 'list.php';
    
           ?>
         <div id="d5"style="width: 100%;height: 500px;">
          <br><br> 
          <h1>تغير كلمه السر </h1>


           <form style="width: 500px ;" action="fun/change.php" method="post">
               <div>
                  <?php
                      $re=$_GET['re'];
                      if($re==1){
                        echo "كلمه السر القديمه خطا";
                     }
                     if($re==2){
                        echo "عدم تطابق الكلمات الجديده";
                     } 
                  ?>
              </div>
              <div>
                  <input class="f75"  type="text" name="n1">  
                  <lable class="f25">كلمه السر القديمه</lable><br>
              </div>
               <br>

               <div>
                  <input class="f75"   type="password" name="n2">  
                  <lable class="f25">كلمه السر الجديده</lable><br>
               </div>
               <br>

               <div>
                  <input class="f75"   type="password" name="n3">  
                  <lable class="f25">اعاده كلمه السر</lable><br>
               </div>
               <br>

               <div>
                  <input style="width: 150px;" type="submit" name="submit" value="ارسال">  
              </div>
              <br>
          </form>
          
         </div>
      </center>
 </body>

</html>