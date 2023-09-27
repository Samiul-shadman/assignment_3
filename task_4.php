<?php

$studentGrades = [
    'student_1'=>['Math' => 100 , 'English' => 85 , 'Science' => 91 ],
    'student_2'=>['Math' => 80 , 'English' => 70 , 'Science' => 87 ], 
    'student_3'=>['Math' => 68 , 'English' => 90 , 'Science' => 89 ], 
];

function markGrades($students){
    foreach($students as $student=>$numbers){
        $grade;
        $avgGrade = ($numbers['Math']+$numbers['English']+$numbers['Science'])/3;

        if($avgGrade >= 80){
            $grade = 'A+';
        }
        elseif($avgGrade >=70 && $avgGrade <80){
            $grade = 'A';
        }
        elseif($avgGrade >=60 && $avgGrade <70){
            $grade = 'B';
        }
        elseif($avgGrade >=50 && $avgGrade <60){
            $grade = 'C';
        }
        elseif($avgGrade >=40 && $avgGrade <50){
            $grade = 'D';
        }
        else{
            $grade = 'F';
        }

        echo "Average grade for $student: $grade" ."\n";
    }

}
 

markGrades($studentGrades);

