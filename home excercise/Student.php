<?php
    class Student extends Person{
        private $selectedCourses;
        private $creditPoints;

        function __construct($fname,$lname,$year,$courses = array(),$crePts=0){
            parent::__construct($fname,$lname,$year);
            $this->selectedCourses = $courses;
            $this->creditPoints = $crePts;
        }
        //courses getter and setter
        public function setCourses($course){
            if(gettype($course) == "array"){
                foreach($course as $newCourse){
                    array_push($this->selectedCourses,$newCourse);
                }
            }else if (gettype($course) == "string"){
                array_push($this->selectedCourses,$course);
            }else{
                return 'this input is invalid';
            }
        }
        public function getCourses(){
            $courses = '';
            foreach($this->selectedCourses as $course){
                $courses .= $course.', ';
            }
            return $courses;
        }
        //credit points getter and setter
        public function setCreditPoints($point){
            $this->creditPoints = $point;
        }
        public function getCreditPoints(){
            return $this->creditPoints;
        }
        //print obj info
        public function toString(){
            $courses = '';
            foreach($this->selectedCourses as $course){
                $courses .= $course.', ';
            }
            return parent::toString().
            '<br>Selected courses: '.$courses.
            '<br>Credit points: '.$this->creditPoints;
        }
    }
?>