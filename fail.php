<?php
ob_start();
?>
<?php
session_start();
if($_SESSION["login"] == "No"){
} else {
    header ("Location : error.php");
}
?>
<html>
<head>
<meta charset = "utf-8">
</head>
<body>
Login fail！ <br>
<a href = "index.php"> Click here to go back to home page </a>
</body>
</html>
<?php
ob_flush();
?>
