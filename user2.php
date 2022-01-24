<?php
class User { 
    private $id; 
    private $first_name; 
    private $last_name; 
    private $age; 
    public function __construct($id, $first_name, $last_name, $age){ 
        $this->id           = $id; 
        $this->first_name   = $first_name; 
        $this->last_name    = $last_name; 
        $this->age          = $age; 
    } 
        public function getName(){ 
            return $this->first_name." ".$this->last_name; 
        } 
        public function isAdult(){ 
            return $this->age >= 18; 
        } 
    } 
    $user = new User(1, "Tim", "Doe", 20); 
    echo $user->getName().""; 
    if($user->isAdult()) 
    echo " este adult"; 
    else echo " nu este adult";