<html>
     <head>
       <title>المكتبه الالكترونيه</title>
    </head>
 

   <body>
        <?php
           include 'cs.cs';
        ?>

       <div style="width:100%;position: fixed;top: 0;">
           <ul>
                <li><a href="call.php">اتصل بنا</a></li>
                <li><a href="plan.php">الخطه</a></li>
                <li><a href="team.php">فريق العمل</a></li>
                <li><a href="book.php">الكتب</a></li>
                <li><a href="about.php">حول</a></li>
                <li><a href="index.php">الرئسيه</a></li>
                <?php
                    session_start();
                    if (!isset($_SESSION['library'])) {
                    
                  ?>
                         <li style="float:right;"><a href="login.php">تسجيل الدخول</a></li>

                <?php
                   }
                 ?>
                 <?php
                    if (isset($_SESSION['library'])) {
                     $n1=$_SESSION['library'];
                     include 'connect.php';
                     $sql="SELECT * FROM users WHERE the_user ='$n1' ";
                     $result=$conn->query($sql);
                     while ($row=$result->fetch_assoc()) {
                     $the_user=$row['the_user'];
                     }
                 ?>

                            <li style="float:right;"><a href="login.php">تسجيل الخروج</a></li>
                          
                            <li style="float:right;"><a href="admin.php">الصفحه الشخصيه</a></li>

                <?php
                    }
                  ?>
           </ul> 
       </div>
   </body>


</html>