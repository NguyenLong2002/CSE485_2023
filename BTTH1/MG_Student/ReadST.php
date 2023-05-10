<?php
require_once 'Student.php';
require_once 'StudentDAO.php';

//kiểm tra xem tệp tin có tồn tại hay không
if (file_exists('studentDAO.csv')) {
  $handle = fopen('studentDAO.csv', 'r');
  //...
} else {
  echo "File studentDAO.csv not found";
}
// Tạo đối tượng StudentDAO để lưu trữ danh sách sinh viên
$studentDAO = new StudentDAO();

// Mở file studentDAO.csv đọc dữ liệu
$handle = fopen('studentDAO.csv', 'r');

// Đọc các dòng dữ liệu từ file và lưu vào StudentDAO
while (($data = fgetcsv($handle)) !== false) {
  // Tạo đối tượng Student từ dữ liệu trong file
  $id = $data[0];
  $name = $data[1];
  $age = $data[2];
  $grade = $data[3];
  $student = new Student($id, $name, $age, $grade);

  // Thêm đối tượng Student vào đối tượng StudentDAO
  $studentDAO->create($student);
}

// Đóng file sau khi đọc xong
fclose($handle);

// Hiển thị danh sách sinh viên lên trang web
$students = $studentDAO->getAll();
?>