<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<?php
include 'Function.php';
?>
<table style="width:100%">
    <h1>PHP Loop Table<h1>
    <?php
for ($row = 1; $row <= 5; $row++) {
    echo "<tr>";

    for ($col = 1; $col <= 5; $col++) {
        $num1 = rand(1, 100);
        $num2 = rand(1, 100);

        $value = generateValue($num1, $num2);

        echo "<td>$value</td>";
    }

    echo "</tr>";
}
?>
</table>

</body>
</html>