<!--
    Xavier Grunitzky
    CSD 440 Assignment 1.3
    8/15/26
    This PHP program demonstrates string concatenation and
    performs a basic mathematical calculation.
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Examples</title>
      <style>
        body {
            font-size: 20px;
        }
    </style>
</head>
<body>

    <?php
    // Combine two text variables and display the message.
    $x = "Hello,";
    $y = "welcome to my PHP webpage. My name is Xavier."; 
    $z = "$x $y";

    echo $z;
    ?>

    <br>
    <?php
    // Add two numbers together and display the result.
    $x = 10;
    $y = 5;

    $sum = $x + $y;

    echo "10 + 5 = " . $sum;
    ?>

</body>
</html>