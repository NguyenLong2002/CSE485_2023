<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>BTTH_01</title>
</head>
<body>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

</h1>
    <div class="form-student">
        <h2>Thông tin sinh viên</h2>
            <label>ID:</label>
            <input type="text" id="id-student" ><br>

            <label>Họ và tên:</label>
            <input type="text" id="name" ><br>

            <label>Tuổi:</label>
            <input type="text" id="age" ><br>

            <!-- kí tự khoảng trắng -->
            <label>&nbsp;</label>

            <button>Xóa</button>
            <button>Lưu</button>
            
    
    </div>

    <div class="list-student">
    <h2>Danh sách sinh viên</h2>
        <table style="width: 550px; border: 2px solid #ccc; text-align: center;">
            <tr>
                <td>#</td>
                <td>Họ và tên</td>
                <td>Tuổi</td>
            </tr>
        


        </table>
    </div>
</body>
</html>