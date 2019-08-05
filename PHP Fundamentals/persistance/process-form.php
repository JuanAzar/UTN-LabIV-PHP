<?php
    require_once("Config/Autoload.php");

    use Repositories\StudentRepository as StudentRepository;
    use Models\Student as Student;
    use Data\Cast as Cast;

    if($_POST)
    {
        $recordId = $_POST["recordId"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];        

        $student = new Student();
        $student->setRecordId($recordId);
        $student->setFirstName($firstName);
        $student->setLastName($lastName);

        $studentRepository = new StudentRepository();

        $studentRepository->Add($student);        
    }

    header("location:index.php");
?>