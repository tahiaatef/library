<html>
  <head>
     <title>المكتبه الالكترونيه</title>
  </head>
 

  <body style="background-color:Sienna;">

    <?php
      include 'cs.cs';
      include 'list.php';
   ?>
   
       <br><br><br>
     <div >
         <form method="get" >
              <input  type="text" name="search" class="search" placeholder="Search">
              <button type="submit" name="btn-search" >search.بحث</button>
          </form>
          <?php
              $username="root";
              $password="";
              $database= new PDO("mysql:host=localhost; dbname=library;",$username,$password);

             if(isset($_GET['btn-search'])){
             $SEARCH=$database->prepare("SELECT * FROM book WHERE  num LIKE :value 
             OR booktitle LIKE :value  OR authorname LIKE :value  OR ddate LIKE :value  ");
             $SEARCH_VALUE ="%".$_GET['search']."%";


             $SEARCH->bindparam("value", $SEARCH_VALUE);
             $SEARCH->execute();
        
             foreach ($SEARCH as $data) {
               echo "<h1>" .$data['num']."</h1>";
               echo "<h1>" .$data['booktitle']."</h1>";
               echo "<h1>" .$data['authorname']."</h1>";
               echo "<h1>" .$data['ddate']."</h1>";
              }
             }
           ?>
     </div>


      <br><br><br>
     <div id="d2" class="d2"  style="float:left;height:100%;">
            <center>
            <h1 >الكتب الموجوده والاكثر استعاره</h1>
            </center>
            <br><br><br>
          <div style="float:left; height: 20%;">
               <img src="../1.png"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
          </div>     
          <div style="float: left;height: 25%;">
               <img src="../2.png"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>  
          <div style="float: left;height: 25%;">
               <img src="../3.jpg"style="width: 200;height: 120; padding:0px 10px 10px  0px;">
          </div>  
          <div style="float: left;height: 25%;">
               <img src="../4.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>  
    
          <div style="float: left;height: 25%;">
               <img src="../5.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>  
          <div style="float: left;height: 25%;">
               <img src="../6.png"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../7.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../8.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../9.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../10.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../11.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
            <img src="../12.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../13.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../14.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../16.jpg"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../17.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../18.jpg"style="width: 200;height: 120;padding:0px 10px 10px  0px;">
          </div>
          <div style="float: left;height: 25%;">
            <img src="../19.jpg"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
         </div>
          <div style="float: left;height: 25%;">
              <img src="../20.jpg"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
          </div>
          <div style="float: left;height: 25%;">
              <img src="../21.jpg"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
          </div>
          <div style="float: left;height: 10%;">
              <img src="../22.jpg"style="width: 200;height: 120;padding:0px 10px 10px 0px;">
          </div>
      </div>
 

     

     


    
 
 </body>


</html>