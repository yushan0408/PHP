<?php 
session_start();

if($_SESSION["login"] == "student" || $_SESSION["login"] == "teacher"){
}else{
    header("Location:error.php");
}
?>

<html>
<head><meta charset="UTF-8">
<title>
    
</title>
</head>
<body>
Student website</br>
<a href="teacher.php">Teacher website<a></br>
<a href="principal.php">Principal Website<a></br>
<a href="logout.php">Logout<a>
</body>
</html>