<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Thêm sinh viên mới</title>
</head>
<body>
    
        <div class="form-student">
            <h2>Thêm sinh viên mới</h2>
            <form method="post">
                <label for="id">ID:</label>
                <input type="text" id="id" name="id"><br><br>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="age">Age:</label>
                <input type="text" id="age" name="age"><br><br>
                <label for="grade">Grade:</label>
                <input type="text" id="grade" name="grade"><br><br>
                <input type="submit" name="submit" value="Thêm">
            </form>
        </div>
        <div class="list-student">
            <h2>Danh sách sinh viên</h2>
            <table style="border: 2px solid #ccc; text-align: center;">
                <?php include 'read.php'?>
            </table>
        </div>
    

    <?php
        // Kiểm tra khi form được submit
        if (isset($_POST['submit'])) {
            // Lấy dữ liệu từ form
            $id = $_POST['id'];
            $name = $_POST['name'];
            $age = $_POST['age'];
            $grade = $_POST['grade'];

            // Kiểm tra sự trùng lặp
            $exist = false;
            foreach ($students as $student) {
                if ($student['id'] == $id) {
                    $exist = true;
                    break;
                }
            }

            // Nếu không có sự trùng lặp, thêm sinh viên mới vào danh sách
            if (!$exist) {
                $student = array(
                    'id' => $id,
                    'name' => $name,
                    'age' => $age,
                    'grade' => $grade
                );
                $students[] = $student;

                // Lưu danh sách sinh viên vào file CSV
                $file = fopen('DSSinhVien.txt', 'w');
                foreach ($students as $student) {
                    fputcsv($file, $student);
                }
                fclose($file);

                echo 'Thêm sinh viên mới thành công!';
            } else {
                echo 'ID đã tồn tại, vui lòng nhập lại!';
            }
        }
	?>
</body>
</html>
