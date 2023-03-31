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
</head>
<body>
<div class="bgdiv"> 
    <div class="student">
    <form action="" method="GET">
        <table id="table">
            <tr><td>Student id : </td>
            <td><input type="text" name="student_id" value="<?php echo $_GET['rn']; ?>"></td></tr>
            
            <tr><td>NAME : </td>
            <td><input type="text" name="student_name" value="<?php echo $_GET['nm']; ?>"/></td></tr>
            
            <tr><td>CITY : </td>
            <td><input type="text" name="student_city" value="<?php echo $_GET['ct']; ?>"></td></tr>
            
            <tr><td>COLLEGE : </td>
            <td><input type="text" name="student_college" value="<?php echo $_GET['cg']; ?>"></td></tr>
            
            <tr><td>PHONE : </td>
            <td><input type="text" name="student_phone" value="<?php echo $_GET['ph']; ?>"></td></tr>
            
            <tr><td></td>
            <td></td></tr>
            
            <tr><td></td>
            <td><input type="submit" name="student_submit" value="UPDATE"></td></tr>
        </table>
    </form>
</div>
<div class="modify">
    <a href="showData.php">SHOW DATA</a>
</div>
<?php
    if($_GET['student_submit']){
        $id=$_GET['student_id'];
        $name=$_GET['student_name'];
        $city=$_GET['student_city'];
        $college=$_GET['student_college'];
        $phone=$_GET['student_phone'];

        $sql="UPDATE STUDENT_INFO SET NAME='$name',CITY='$city',COLLEGE_NAME='$college',PHONE_NUMBER='$phone'
            WHERE ID='$id'";
        $result=mysqli_query($Conn,$sql);
        if($result){
            echo "updated";
        }else{
            echo "failed to update";
        }
    }
?>
</div>
</body>
</html>
