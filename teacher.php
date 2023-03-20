<?php 
session_start();

if($_SESSION["login"] == "principal" || $_SESSION["login"] == "teacher"){
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
Teacher website</br>
<a href="student.php"> Student website <a></br>
<a href="principal.php"> Principal website <a></br>
<a href="logout.php"> Logout <a>
</body>
</html>