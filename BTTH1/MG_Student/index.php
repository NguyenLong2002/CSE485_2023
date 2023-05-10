<?php
include_once "ReadST.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Danh sách sinh viên</title>
</head>
<body>
<h1 style="text-align: center;">Danh sách sinh viên</h1>
<div>
    <table  >
        <?php
        foreach( $students as $student){
        ?>
        <tr>
            <td style="width:100px; text-align: center;"><?=$student->getId()?></td>
            <td style="width:250px; text-align: center;"><?=$student->getName()?></td>
            <td style="width:150px; text-align: center;"><?=$student->getAge()?></td>
            <td style="width:150px; text-align: center;"><?=$student->getGrade()?></td>
        </tr>
        <?php 
        }
        ?>
    </table>
</div>
    <a href="addST.php"><button >Add Student </button></a>
</body>
</html>