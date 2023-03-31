<?php
    include("connection.php");
    error_reporting(0);
    $id=$_GET['id'];
    $sql="DELETE FROM STUDENT_INFO WHERE ID='$id';";
    $result=mysqli_query($Conn,$sql);
    if($result){
        echo "successfully deleted";
?>
        <meta HTTP-EQUIV="Refresh" content="0; URL=http://localhost/showData.php">
<?php
    }else{
        echo "failed to delete";
    }
?>