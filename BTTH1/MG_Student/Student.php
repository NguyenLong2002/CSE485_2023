<?php
class Student {
    //Khai báo thuộc tính
    public $id;
    public $name;
    public $age;

    //Khai báo hàm khởi tạo (constructor)
    public function getID(){
        return $this->id;
    } 
    public function setID($id){
       $this->id = $id;
    } 
    
    public function getName(){
        return $this->name;
    } 
    public function setName($name){
       $this->name = $name;
    } 

    public function getAGE(){
        return $this->age;
    } 
    public function setAGE($age){
       $this->age = $age;
    } 

}
