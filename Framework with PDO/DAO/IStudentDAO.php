<?php
    namespace DAO;

    use Models\Student as Student;
    use DAO\Connection as Connection;

    interface IStudentDAO
    {
        function Add(Student $student);
        function GetAll();
    }
?>