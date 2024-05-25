<?php 

//print_r($_POST)
    $score = $_POST['score'];
    $fullname = $_POST['fullname'];
    $subjects = $_POST['subjects'];
    $grade = null;

    if($score >= 50 && $score <= 50){
        $grade = "Grade D";
    }else if($score >= 60 && $score < 70){
        $grade = "Grade C";
    }else if($score >= 70 && $score < 80){
        $grade = "Grade B";
    }else if($score >= 80){
        $grade =  "Grade A";
    }else{
        $grade =  "Grade F";
    }
    
echo  "ชื่อ : ".$fullname . "<br>";
echo  "วิชา : ".$subjects . "<br>";
echo  "คะเเนนที่ได้ : ".$score. "<br>";
echo  "เกรด : ".$grade . "<br>";



?>