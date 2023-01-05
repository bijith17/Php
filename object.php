<?php
// public
// private
// protected 
class Student{
       private $name;
       private $roll_number;

      public function setname($para_name){
        $this->name=$para_name;

       }
      public function set_rollnumber($para_rollnumber){
        $this->roll_number=$para_rollnumber;
       }
      public function getname(){
            return $this->name;
       }
      public function get_rollnumber(){
        return $this->roll_number;
       }

}

$objects=new Student();

$objects->setname("smith");
$objects->set_rollnumber("12");

echo $objects->getname();
echo $objects->get_rollnumber();


?>