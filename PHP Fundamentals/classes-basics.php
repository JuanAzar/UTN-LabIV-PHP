<?php
    class User
    {
        public $name;
        public $email;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;
        }
    }

    $user = new User("John", "john@doe.com");
    echo $user->name . " " . $user->email;
    echo "<br>";

    class Student
    {
        private $name;

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name;
        }
    }

    $student = new Student();
    $student->setName("John Doe");

    echo $student->getName();
?>