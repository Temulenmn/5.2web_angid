<?php
    if(isset($_POST['name'],$_POST['grade'],$_POST['department'],$_POST['course'])){

    echo "Name: ".$_POST['name'];
    echo "<br>Grade: ".$_POST['grade'];
    echo "<br>Tenhim: ".$_POST['department'];
    echo "<br>Courses: ";
    if(isset($_POST['submit'])){

        if(!empty($_POST['course'])) {
            foreach($_POST['course'] as $value){
                echo $value.', ';
            }
        }
        
        
    }
}



?>