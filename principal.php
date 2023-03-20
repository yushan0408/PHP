<?php 
session_start();

if($_SESSION["login"] == "principal"){
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
Principal Website</br>
<a href="student.php">Student Website<a></br>
<a href="teacher.php">Teacher Website<a></br>
<a href="logout.php">Logout<a>
</body>
</html>