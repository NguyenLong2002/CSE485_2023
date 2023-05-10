<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Thêm sinh viên mới</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    if(isset($_COOKIE['validate']) && $_COOKIE['validate'] == 'exists') {
       $validate = true;
       $id = isset($_COOKIE['id']) ? $_COOKIE['id'] : '' ;
       $name = isset($_COOKIE['name']) ? $_COOKIE['name'] : '' ;
       $age = isset($_COOKIE['age']) ? $_COOKIE['age'] : '' ;
       $grade = isset($_COOKIE['grade']) ? $_COOKIE['grade'] : '' ;
    } else {
        $validate = false;
        $id = '' ;
        $name = '' ;
        $age = '' ;
        $grade = '' ;
    }

?>
    <h1 style="text-align: center;">Thêm sinh viên</h1>
    <form calss="Add-student" method="post" action="SaveSV.php">
    <div>
        <label for="id">ID:</label>
        <input type="text" id="id" name="id" value="<?= $id ?>" required>
        <?php
            if($validate){
                echo '<p style="color: red;">Student ID already exists!</p>';
            }
        ?>
    </div>
    <br>
    <div>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $name ?>" required>
    </div>
    <br>
    <div>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="<?= $age ?>" required>
    </div>
    <br>
    <div>
        <label for="grade">Grade:</label>
        <input type="text" id="grade" name="grade" value="<?= $grade?>" required>
    </div>
    <br>
    <div><button  type="submit">Save</button>
        <a  href="index.php">
        <button type="button">
           Exit
        </button>
        </a></div>
    
    </form>
</body>
</html>