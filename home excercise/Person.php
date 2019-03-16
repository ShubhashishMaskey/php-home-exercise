<?php
    abstract class Person{
        protected $firstName;
        protected $lastName;
        protected $yearOfBirth;
        function __construct($fname, $lname, $year){
            $this->firstName = $fname;
            $this->lastName = $lname;
            $this->yearOfBirth = $year;
            $this->age = 2019 - $this->yearOfBirth;
        }

        public function setFirstName($fname){
            $this->firstName = $fname;
        }
        public function getFirstName(){
            return $this->firstName;
        }
        public function setLastName($lname){
            $this->lastName = $lname;
        }
        public function getLastName(){
            return $this->lastName;
        }
        public function setYear($year){
            $this->yearOfBirth = $year;
        }
        public function getYear(){
            return $this->yearOfBirth;
        }
        public function getAge(){
            return $this->age;
        }
        public function toString(){
            return 'First name is: '.$this->firstName.
                   '<br>Last name is: '.$this->lastName.
                   '<br>Born in: '.$this->yearOfBirth.
                   '<br>Age: '.$this->age;
        }
    }
?>