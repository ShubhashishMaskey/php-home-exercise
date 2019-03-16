<?php
    class Teacher extends Person{
        private $teachingSubjects;
        private $department;
        function __construct($fname,$lname,$year,$subj = array(),$dept){
            parent::__construct($fname,$lname,$year);
            $this->teachingSubjects = $subj;
            $this->department = $dept;
        }
        //teaching subjects getter and setter
        public function setTeachingSubj($subjects=array()){
            foreach($subjects as $subj){
                array_push($this->teachingSubjects,$subj);
            }
        }
        public function getTeachingSubj(){
            $subjects = '';
            foreach($this->teachingSubjects as $subj){
                $subjects .= $subj.', ';
            }
            return $subjects;
        }
        //department setter and getter
        public function setDepartment($dept){
            $this->department = $dept;
        }
        public function getDepartment(){
            return $this->department;
        }
        //print obj info
        public function toString(){
            $subjects = '';
            foreach($this->teachingSubjects as $subj){
                $subjects .= $subj.', ';
            }
            return parent::toString().
            '<br>Teaching subject(s): '.$subjects.
            '<br>Department: '.$this->department;
        }
    }
?>