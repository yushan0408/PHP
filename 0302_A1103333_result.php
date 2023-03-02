<meta chsrset = "utf8">
<?php
if (isset($_POST["name"])){
    $name = $_POST["name"];
    echo "名字：".$name."<br/>";
} else { echo "資料錯誤";
}
$id = $_POST["id"];
echo "學號：".$id."<br/>";
$join = $_POST["join"];
echo "是否參加：".$join."<br/>";
$food = $_POST["food"];
echo "吃什麼：".$food."<br/>";
if (isset($_POST["email"])){
    $email = $_POST["email"];
    echo "信箱：".$email."<br/>";
} else { echo "資料錯誤";
}
?>