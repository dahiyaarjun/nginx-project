<?php
    include("connection.php");
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .button{
            background-color:white;
            color: green;
            border-radius:20px; 
            margin: 3px;
            padding:15px 18px;
            min-height:24px; 
            min-width: 110px;
        }
    </style>
</head>
<body>
    <div class="bgdiv">
    <div class="student">
    <form action="" method="POST">
        <table id="table">
            <tr><td>Student id : </td>
            <td><input type="text" name="student_id"></td></tr>
            
            <tr><td>NAME : </td>
            <td><input type="text" name="student_name"></td></tr>
            
            <tr><td>CITY : </td>
            <td><input type="text" name="student_city"></td></tr>
            
            <tr><td>COLLEGE : </td>
            <td><input type="text" name="student_college"></td></tr>
            
            <tr><td>PHONE : </td>
            <td><input type="text" name="student_phone"></td></tr>
            
            <tr><td></td>
            <td></td></tr>
            
            <tr><td></td>
            <td><input type="submit" name="student_submit"></td></tr>
        </table>
    </form>
</div>
</div>
<div class="modify">
    <a href="showData.php"><button type="button" class="button">SHOW DATA</button></a><br>
    <a href="showData.php"><button type="button" class="button">EDIT DATA</button></a><br>
    <a href="showData.php"><button type="button" class="button">DELETE DATA</button></a><br>
</div>
</body>
</html>
<?php
if($_POST['student_submit']){
    
    $id=$_POST['student_id'];
    $name=$_POST['student_name'];
    $city=$_POST['student_city'];
    $college=$_POST['student_college'];
    $phone=$_POST['student_phone'];
    
    if($id!="" && $name!="" && $city!="" && $college!="" && $phone!=""){

        $sql="INSERT INTO STUDENT_INFO VALUES ('$id','$name','$city','$college','$phone')";
        $result=mysqli_query($Conn,$sql);

        if($result){
            echo "saved";
        }else {
            echo "failed to save";
        }

    }
    else{
        echo "all fields required";
    }
}
?>