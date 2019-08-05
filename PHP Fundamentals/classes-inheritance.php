<?php
    abstract class Person
    {
        private $firstName;
        private $lastName;
        private $dni;

        public function getFirstName() { return $this->firstName; }
        public function setFirstName($firstName) { $this->firstName = $firstName; }
        public function getLastName() { return $this->lastName; }
        public function setLastName($lastName) { $this->lastName = $lastName; }
        public function getDni() { return $this->dni; }
        public function setDni($dni) { $this->dni = $dni; }
    }

    class Student extends Person
    {
        private $fileNumber;    

        public function getFileNumber() { return $this->fileNumber; }
        public function setFileNumber($fileNumber) { $this->fileNumber = $fileNumber; }
    }

    class Professor extends Person
    {
        private $career;    

        public function getCareer() { return $this->career; }
        public function setCareer($career) { $this->career = $career; }
    }

    $student = new Student();
    $professor = new Professor();

    var_dump($student);
    var_dump($professor);
?>


