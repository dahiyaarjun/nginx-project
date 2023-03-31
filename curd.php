<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
  </head>
  <body>
    <nav>
      <p>You can perform CRUD OPERATIONs Here</p>
    </nav>
    <!-- <div class="msg_suc"><h3>Success</h3></div> -->
    <div class="operations">
      <div class="container">
        <?php
          // $servername="localhost:3307";
          // $username="root";
          // $password="";
          // $database="novo";
          // $con=mysqli_connect($servername,$username,$password,$database);
          // if($con){
          //   echo "Connected successfuly<br>";
          // }
          // else{
          //   echo "not connected<br>";
          // }
          // $q = " INSERT INTO `details`(`ID`, `Name`,`City`,`College_name`,`Phone_number`) VALUES ( 13, 'name','city','rdec',456 )";
          // $result = mysqli_query($con,$q);
          // if($result){
          //     echo "inserted successfully<br>";
          // }
          // else{
            //     echo "not inserted<br>";
            // }
            ?>
            <a class="button" href="create.php">create</a>
            <a class="button" href="read.php" >read</a>
            <a class="button" href="update.php" >update</a>
            <a class="button" href="delete.php" >delete</a>
      </div>
    </div>
  </body>
</html>