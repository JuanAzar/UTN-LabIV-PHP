<?php
    require_once "Config\Autoload.php";    

    use Models\Student as Student;

    $student = new Student();

    $student->setFirstName("John");
    $student->setLastName("Doe");
    $student->setRecordId(123456);
    
    var_dump($student);
?>