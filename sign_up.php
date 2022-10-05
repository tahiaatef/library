<html>
   <head>
     <title>المكتبه الالكترونيه</title>
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
           
          <h1>تسجيل مستخدم جديد</h1>


           <form style="width: 500px ;" method="get" action="fun/adduser.php">
             <div>
                  <?php
                      $re=$_GET['re'];
                      if($re==1){
                        echo "اسم المستخدم موجود مسبقا";
                     }
                     if($re==2){
                        echo "كلمه السر غير متطابقتين";
                     } 
                  ?>
              </div>
             <div>
                  <input class="f75"  type="text" name="the_user">  
                  <lable class="f25">اسم المستخدم بالكامل</lable><br>
             </div>
              <br> 

             <div>
                 <input class="f75"  type="email" name="email">  
                 <lable class="f25">ادخل الايميل الشخصي</lable><br>
             </div>
              <br>

             <div>
                  <input class="f75"   type="tel" name="the_phone">  
                  <lable class="f25">الهاتف</lable><br>
             </div>
              <br>


             <div>  
                 <lable class="f25">المرحله</lable>
                 <select class="f75" name="stage">
                      <option value="الاولي">الاولي</option>
                      <option value="التانيه">التانيه</option>
                      <option value="التالته">التالته</option>
                      <option value="الرابعه">الرابعه</option>
                 </select>
              </div>
             <br>

              <div>
                  <input class="f75"   type="password" name="the_password">  
                  <lable class="f25">كلمه السر</lable><br>
             </div>
              <br>

              <div>
                  <input class="f75"   type="password" name="reset_password">  
                  <lable class="f25">اعاده كلمه السر</lable><br>
             </div>
            
              <?php
             if($re=='1'){
             echo"كلمه السر غير متطابقتين";
             }
           ?> 
           <br>   
             <div>
                   <input class="f75"   type="text" name="notes">  
                   <lable class="f25">ملاحظه</lable><br>
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