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

<table style="width:100%">
    <h1>PHP Loop Table<h1>
    <?php
    for ($row = 1; $row <= 3; $row++) {
    ?>
        <tr>
            <?php
            for ($col = 1; $col <= 3; $col++) {
            ?>
                <td><?php echo rand(1, 100); ?></td>
            <?php
            }
            ?>
        </tr>
    <?php
    }
    ?>
</table>

</body>
</html>