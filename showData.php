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
    <title>update</title>
    <style>
        table{
            margin:auto;
            /* width:100%; */
            font-size:100%;
        }
        table tr td{
            width:5%;
        }
        table tr th{
            width:5%;
        }
        .button{
            /* position: absolute; */
            /* top:50%; */
            background-color:green;
            color: #fff;
            border:none; 
            border-radius:10px; 
            padding:15px;
            min-height:30px; 
            min-width: 120px;
        }
        #div1{
            margin:auto;
            background:#ADD8E6;
            width:40%;
            margin-top:8%;
            border: 2px solid black;
            padding:2%;
        }
        #div2{
            margin-left:60%;
            margin-top:2%;
        }
    </style>
</head>
<body>
<div id="div1">
        <?php
            $dsql="SELECT * FROM STUDENT_INFO";
            $data=mysqli_query($Conn,$dsql);
            $total=mysqli_num_rows($data);
            // echo $total;
            // $result=mysqli_fetch_assoc($data);
        ?>
        <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>city</th>
            <th>college</th>
            <th>phone</th>
            <th colspan="2">operation</th>
        </tr>
        <?php
            if($total!=0){
                while($result=mysqli_fetch_assoc($data)){
                echo "<tr>
                    <td>".$result['id']."</td>
                    <td>".$result['name']."</td>
                    <td>".$result['city']."</td>
                    <td>".$result['college_name']."</td>
                    <td>".$result['phone_number']."</td>
                    <td><a href='update.php?rn=$result[id]&nm=$result[name]&ct=$result[city]&cg=$result[college_name]&ph=$result[phone_number]'>edit</a></td>
                    <td><a href='delete.php?id=$result[id]' onclick='return checkdelete()'>delete</a></td>
                    </tr>";
                }
            }
            ?>
        </table>
    </div>
<div id="div2">
    <a href="upload.php"><button type="button" class="button">PREVIOUS</button></a>
</div>
<script>
    function checkdelete() {
        return confirm("Are you sure to delete the data?");
    }
</script>
</body>
</html>