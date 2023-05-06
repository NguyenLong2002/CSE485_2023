<?php
class StudentDAO {
  private $students = array();

  public function create(Student $student) {
    // Thêm sinh viên mới vào mảng
    array_push($this->students, $student);
  }

  public function read($id) {
    // Tìm sinh viên với ID tương ứng
    foreach ($this->students as $student) {
      if ($student->getId() == $id) {
        return $student;
      }
    }
    return null;
  }

  public function update(Student $student) {
    // Tìm và cập nhật sinh viên trong mảng
    foreach ($this->students as &$s) {
      if ($s->getId() == $student->getId()) {
        $s = $student;
      }
    }
  }

  public function delete($id) {
    // Xóa sinh viên với ID tương ứng khỏi mảng
    foreach ($this->students as $key => $student) {
      if ($student->getId() == $id) {
        unset($this->students[$key]);
      }
    }
  }

  public function getAll() {
    // Trả về toàn bộ danh sách sinh viên
    return $this->students;
  }
}
