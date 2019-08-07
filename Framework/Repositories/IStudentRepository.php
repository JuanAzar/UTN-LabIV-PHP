<?php
    namespace Repositories;

    use Models\Student as Student;

    interface IStudentRepository
    {
        function Add(Student $student);
        function GetAll();
    }
?>