<html>
<head>
<title>Лабораторная работа №4</title>
</head>
<body>
<?php
$var1 = 0;
$var2 = 0;
if(isset($_GET["var1"])) {
    $var1 = $_GET["var1"];
}
if(isset($_GET["var2"])) {
    $var2 = $_GET["var2"];
}
$sum = $var1 + $var2;
echo "<h2>$var1 + $var2 = $sum</h2>";
?>
</body>
</html>