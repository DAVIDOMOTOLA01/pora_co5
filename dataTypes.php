<?php

// Data types in php
// primitive Data types
//          string : "john"
//          integer : 1
//          float : 1.5
//          boolean : true
//          array : ['john', 'lumanze', 'peter']



$my_name = "John";          // string
$my_age = 45;                // integer
$my_height = 1.5;           // float
$is_student = true;         // boolean
$my_students = ['John', 'Lumanze', 'Peter','david','blessing','raphael','lanre']; // array



// echo $my_name.""."is ".$my_age."years old<br>".$my_height."is my height<br>".($is_student ?"is a " : "not a  ")."Student<br>";

// Non-primitive data types
// object
// callable
// resource
// nul
// object 



class Person {
    public $name;   //string
    public $age;    //number
    public $height;    //float
    public $is_student;   //boolean
    public $complexion;
    public $attitude;
    public $gender;
     

    function __construct($name, $age, $height, $is_student) {
        $this->name = $name;
        $this->age = $age;
        $this->height = $height;
        $this->is_student = $is_student;
    }
}


// if and else condition

// if ($my_age >= 18){
//     echo "Hello user you're now eligible to drive";
// }
// elseif($my_age == 17){
//     echo "Kindly wait a year more to be able to drive";
// }else{
//     echo "You're not eligible to drive";
// }

// switch

 switch ($my_age){

    case 17:
        echo "Kindly wait a year more to be able to vote";
        break;
    case 18:
        echo "You're now eligible to vote";
        break;
    case 16:
        echo "You need to wait to wait 2 years more to be able to vote";
        break;
    default:
        echo "You did not meet any of the requirements";

 }








?>