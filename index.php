<?php
class User
{
        private $id;
        private $first_name;
        private $last_name;
        private $age;
    function __construct($id,$first_name,$last_name,$age)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    function set ($id,$first_name,$last_name,$age){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->age = $age;
    }
    function pokazi(){
        echo "Name: " . $this->first_name . "<br>";
        echo "Last Name: " . $this->last_name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Корисник пунолетан: ";
    }
    function Agechk($x){
        return $this->age<$x;
    }
}
$y= new User(1,"Миодраг","Милинчић",40);
$y->pokazi();
echo $y->Agechk(40) ? "Не!" : "Да!";
?>