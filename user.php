<?php
class User {
    public $id;
    private $first_name;
    private $last_name;
    public $age;
    public function __construct($id, $first_name, $last_name, $age){
        $this->id         = $id;
        $this->first      = $first_name;
        $this->name       = $last_name;
        $this->age        = $age;
    }
    public function getName($first_name,$last_name){
        $this->first   =$first_name;
        $this->name    =$last_name;
        
       
       
        
    }
   
    public function setAge($age){
        $this->age =$age;
        if (($this->age) >=18){
            echo True;
        }
        else{
            echo False;
        }
        
    }
}

$fullName = new User(1,"Tim", "Doe",20);
/* echo $fullName->id . " ";
echo $fullName->first . "</br>"; */ 
$fullName->getName("John", "Doe");
echo $fullName->first . " ";
echo $fullName->name . " ";
$fullName->setAge(19);






