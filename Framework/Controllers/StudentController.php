<?php
    namespace Controllers;

    class StudentController
    {
        public function ShowAddView()
        {
            require_once(VIEWS_PATH."student-add.php");
        }

        public function ShowListView()
        {
            require_once(VIEWS_PATH."student-list.php");
        }

        public function Add($recordId, $firstName, $lastName)
        {
            $student = new Student();
            $student->setRecordId($recordId);
            $student->setfirstName($firstName);
            $student->setLastName($lastName);
        } 
    }
?>