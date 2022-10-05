<html>
  <head>
    <title>المكتبه الالكترونيه</title>
  </head>


 <body style="background-color:Sienna;">
     <center>
          <?php
         include 'cs.cs';
         include 'list.php';
         session_start();
           ?>
         <div id="d5"style="width: 100%;height: 500px;">
          <br><br> <br>
          <h1>تسجيل دخول الادمن</h1>
           

           <form style="width: 500px ;" action="fun/admintest.php" method="post">
              <div>
                  <input class="f75"  type="text" name="m1">  
                  <lable class="f25">اسم الادمن</lable><br>
              </div>
               <br>

               <div>
                  <input class="f75"   type="password" name="m2">  
                  <lable class="f25">كلمه السر</lable><br>
               </div>
               <br>

               <div>
                  <input style="width: 150px;" type="submit" name="submit" value="دخول">  
              </div>
              <br>
          </form>
      
         </div>
      </center>
 </body>

</html>