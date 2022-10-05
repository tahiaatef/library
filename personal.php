<html>
  <head>
    <title>الصفحه الشخصيه</title>
    <?php
       include 'cs.cs';
       include 'list.php';
    ?>
    <style type="text/css">
      button{
        background-color:teal;
        border:none;
        color:white;
        padding: 15px 32px;
        text align :center;
        display:inline;
        margin: 4px 2px ;
        font-size: 16px;
        width:100%;
      }
      a{
       text-decoration:none;

      }
    </style>
    
  </head>

 <body style="background-color:Sienna;">
    <br><br><br><br><br><br><br>
    
       <center>
          <div style="width:500px;">
                  <a href="pass.php?re="> <button>تغير كلمه السر</button> </a>
                  <a href="new_book.php?re="> <button>اضافه كتاب جديد</button> </a>
                  <a href="delet.php"> <button>حذف كتاب</button> </a>
                  <a href="update.php"> <button>التعديل ع الكتب</button> </a>
           </div>
       </center>
   
 </body>







</html>