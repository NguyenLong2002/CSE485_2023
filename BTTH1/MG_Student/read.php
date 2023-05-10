
<?php
$file = fopen("DSSinhVien.txt", "r");

// Khởi tạo một mảng để lưu trữ danh sách sinh viên
$students = array();

// Đọc dữ liệu từ file và lưu vào danh sách sinh viên
while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
    $student = array(
        'id' => $data[0],
        'name' => $data[1],
        'age' => $data[2],
        'grade' => $data[3]
    );
    array_push($students, $student);
}

// Đóng file
fclose($file);

echo '<table>';
//echo '<tr><th>ID</th><th>Name</th><th>Age</th><th>Grade</th></tr>';
foreach ($students as $student) {
    echo '<tr>';
    echo '<td style = "width:50px">'.$student['id'].'</td>';
    echo '<td style = "width:200px">'.$student['name'].'</td>';
    echo '<td style = "width:200px">'.$student['age'].'</td>';
    echo '<td style = "width:200px">'.$student['grade'].'</td>';
    echo '</tr>';
}
echo '</table>';
?>