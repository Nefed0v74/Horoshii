<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Хороший</title>
    <link rel="stylesheet" href="./css/header_main.css">
    <link rel="stylesheet" href="./css/nav_main.css">
    <link rel="stylesheet" href="./css/main_main.css">
    <link rel="stylesheet" href="./css/footer_main.css">
</head>
<body>
<?php
$username = 'root';
$password = '';
$sql = "SELECT * FROM `USers`";
$con = mysqli_connect("MySQL-8.0", $username, $password, "Horoshii");

$select = mysqli_query($con, $sql);
echo "<table>";
foreach ($select as $row) {
    echo "<tr>";
    foreach ($row as $td){
        echo "<td>". $td. "</td>";
    }
    echo "</tr>";
}

echo "</table>";

mysqli_close($con);
?>
    <?php
    include "./header.php";
    include "./nav.php";
    include "./main.php";
    include "./footer.php";
    ?>
</body>
</html>