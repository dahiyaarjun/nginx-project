<?php
include "connect.php";

if(isset($_POST['done'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $city=$_POST['city'];
    $college_name=$_POST['college_name'];
    $phone_number=$_POST['phone_no'];

    $sql="INSERT INTO `details` (`ID`,`Name`,`City`,`College_name`,`Phone_number`) VALUES ($id,'$name','$city','$college_name',$phone_number)";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "<div class=`msg_suc`><h3>Inserted Successfully</h3></div>";
    }
    else{
        echo "<div class=`msg_er`><h3>not inserted</h3></div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Create</title>
    </head>
    <body>
        <nav>
            <p>Enter Details Here</p>
        </nav>
        <div class="main">
            <div class="form">
                <form  method="post">
                    <label class="form_label" for="id">ID
                        <input class="form_input" name="id" type="number" placeholder="123" required>
                    </label>
                    <label class="form_label" for="name">Name
                        <input class="form_input" name="name" type="text" placeholder="Abhay" required>
                    </label>
                    <label class="form_label" for="city">City
                        <input class="form_input" name="city" type="text" placeholder="Ghaziabad" required>
                    </label>
                    <label class="form_label" for="college_name">College Name
                        <input class="form_input" name="college_name" type="text" placeholder="R.D. Engineering College" required>
                    </label>
                    <label class="form_label" for="phone_no">Phone Number
                        <input class="form_input" name="phone_no" type="text" placeholder="1234567890" required>
                    </label>
                    <button type="submit" name="done">SUBMIT</button>
                </form>
            </div>
        </div>
    </body>
</html>
