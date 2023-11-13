<html>
<body>
<?php 
$surname = "аноним";
$oop_score = 0;
$math_score =  0; 
$db_score = 0; 

if(isset($_POST["surname"])) {
    $surname = $_POST["surname"];
}
if(isset($_POST["oop"])) {
    $oop_score = $_POST["oop"];
}
if(isset($_POST["db"])) {
    $db_score =  $_POST["db"]; 
}
if(isset($_POST["math"])) {
    $math_score = $_POST["math"];
}

$average_score = round((($oop_score + $db_score + $math_score) / 3), 1);

echo "Студент $surname имеет средний балл равный $average_score<br>"; 

if ($oop_score > 3 and $db_score > 3 and $math_score > 3) {
    echo "Студент $surname получает стипендию";
} else {
    echo "Студент $surname не получает стипендию";
}
?>

</body>
</html>
