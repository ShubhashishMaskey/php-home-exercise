<?php
    spl_autoload_register(function($class_name){
        include $class_name.'.php';
    });

    $newStu = new Student('shubhashish','maskey',1999,array('English','Programming','calculas','Finnish'),55);
    echo '<h3>Student</h3>';
    echo $newStu->toString();

    $newTeacher = new Teacher('krisnha', 'shrestha',1950,array('physic'),'science');
    echo '<h3>Teacher</h3>';
    echo $newTeacher->toString();

    $newCleaner = new Staff('Jo', 'boi', 1978, 'cleaner');
    echo '<h3>Staff</h3>';
    echo $newCleaner->toString();

    $newCaretaker = new Staff('rachit', 'hja', 1966, 'Caretaker');
    echo '<br><br>'.$newCaretaker->toString();
?>