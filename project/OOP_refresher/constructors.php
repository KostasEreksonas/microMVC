<?php
    class User {
        public $name;
        public $age;

        // Runs when object is created (instantiated)
        public function __construct($name, $age){
            echo 'Class ' . __CLASS__ . ' instantiated<br>';
            $this->name = $name;
            $this->age = $age;
        }
        public function sayHello(){
            return $this->name . ' says hello';
        }
        // Called when no other references to a certain object
        // Used for cleanup, closing db connections, etc.
        public function __destruct(){
            echo 'destructor ran...';
        }
    }

    $user1 = new User('Brad', 36);
    echo 'Name: ' . $user1->name . ' age: ' . $user1->age . '<br>';
    echo $user1->sayHello() . '<br>';

    $user1 = new User('Sarah', 25);
    echo 'Name: ' . $user1->name . ' age: ' . $user1->age . '<br>';
    echo $user1->sayHello() . '<br>';