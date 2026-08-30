<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palindrome Test</title>
</head>
<body>

<?php
// Function to check if a string is a palindrome
function Palindrome($string) {
    if (strrev($string) == $string) {
        return true;
    } else {
        return false;
    }
}

// Six examples
$ex1 = "AAA";   // Palindrome
$ex2 = "111";   // Palindrome
$ex3 = "989";   // Palindrome
$ex4 = "ABB";   // Not a palindrome
$ex5 = "593";   // Not a palindrome
$ex6 = "APP";   // Not a palindrome

// Store examples in an array
$examples = [$ex1, $ex2, $ex3, $ex4, $ex5, $ex6];

// Display each example
foreach ($examples as $example) {

    echo "<p>";
    echo "Original: " . $example . "<br>";
    echo "Reverse: " . strrev($example) . "<br>";

    if (Palindrome($example)) {
        echo "Palindrome Test: TRUE - This is a palindrome.";
    } else {
        echo "Palindrome Test: FALSE - This is not a palindrome.";
    }

    echo "</p>";
}
?>

</body>
</html>

