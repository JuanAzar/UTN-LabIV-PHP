<?php
    namespace Models;

    use Models\Person as Person;

    class Student extends Person
    {
        private $recordId;

        public function getRecordId()
        {
            return $this->recordId;
        }

        public function setRecordId($recordId)
        {
            $this->recordId = $recordId;
        }
    }
?>

