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
         session_unset();
           ?>
         <div id="d5"style="width: 100%;height: 500px;">
          <br><br> 
          <h1>تسجيل دخول</h1>


           <form style="width: 500px ;" action="fun/test.php" method="post">
              <div>
                  <input class="f75"  type="text" name="n1">  
                  <lable class="f25">اسم المستخدم</lable><br>
              </div>
               <br>

               <div>
                  <input class="f75"   type="password" name="n2">  
                  <lable class="f25">كلمه السر</lable><br>
               </div>
               <br>

               <div>
                  <input style="width: 150px;" type="submit" name="submit" value="ارسال">  
              </div>
              <br>
          </form>
          <a href="sign_up.php?re=">ليس لدي حساب</a>
         </div>
      </center>
 </body>

</html>