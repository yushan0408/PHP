<?php
session_start();
$studentID = "student" ;
$studentPWD = "123" ;
$teacherID = "teacher" ;
$teacherPWD = "345" ;
$principalID = "principal" ;
$principalPWD = "567" ;

$id = $_POST["id"];
$pwd = $_POST["pwd"];

if (($studentID == $id)&&($studentPWD == $pwd)){
    $_SESSION["login"] = "student";
    header("Location: student.php");
} else if 
(( $teacherID == $id)&&($teacherPWD == $pwd)){
    $_SESSION["login"] = "teacher";
    header("Location: teacher.php");
} else if (($principalID == $id)&&($principalPWD == $pwd)){
    $_SESSION["login"] = "principal";
    header("Location: principal.php");
} else {
    $_SESSION["login"] = "No";
    header("Location: fail.php");
}
?>
