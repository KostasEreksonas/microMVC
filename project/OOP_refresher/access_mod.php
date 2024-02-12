<?php
class User {
        private $name;
        private $age;

        public function __construct($name, $age){
            $this->name = $name;
            $this->age = $age;
        }
        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function setName($name){
            $this->name = $name;
        }
        // __get MAGIC METHOD
        public function __get($property){
            if(property_exists($this, $property)){
                return $this->$property;
            }
        }
        // __set MAGIC METHOD
        public function __set($property, $value){
            if(property_exists($this, $property)){
                $this->$property = $value;
            }
            return $this;
        }
    }

    $user1 = new User('Kostas', 25);
    //echo $user1->getName() . '<br>';
    //echo $user1->setName('Jeff');
    //echo $user1->getName();
    echo $user1->__get('name');
    echo $user1->__get('age');
    $user1->__set('age', 21);
    echo $user1->getAge();