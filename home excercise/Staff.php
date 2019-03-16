<?php
    class Staff extends Person{
        private $vacancy;
        function __construct($fname,$lname,$year,$vacancy){
            parent::__construct($fname,$lname,$year);
            $this->vacancy = $vacancy;
        }
        //vacancy getter and setter
        public function setVacancy($vac){
            $this->vacancy = $vac;
        }
        public function getVacancy(){
            return $this->vacancy;
        }
        //print obj info
        public function toString(){
            return parent::toString().
                   '<br>Vacancy: '.$this->vacancy;
        }
    }
?>