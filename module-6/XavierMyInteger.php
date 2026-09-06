<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xavier MyInteger</title>
</head>

<body>

<h1>MyInteger Class Test</h1>

<?php

class XavierMyInteger
{
    private int $number;

    // Constructor
    public function __construct(int $number)
    {
        $this->number = $number;
    }

    // Checks if the number is even
    public function isEven(int $number): bool
    {
        return $number % 2 == 0;
    }

    // Checks if the number is odd
    public function isOdd(int $number): bool
    {
        return $number % 2 != 0;
    }

    // Checks if the stored number is prime
    public function isPrime(): bool
    {
        if ($this->number < 2) {
            return false;
        }

        for ($i = 2; $i < $this->number; $i++) {
            if ($this->number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    // Getter
    public function getNumber(): int
    {
        return $this->number;
    }

    // Setter
    public function setNumber(int $number): void
    {
        $this->number = $number;
    }
}


// Create first object
$firstNumber = new XavierMyInteger(11);

echo "<h2>First Object</h2>";

echo "Number: " . $firstNumber->getNumber() . "<br>";

if ($firstNumber->isEven($firstNumber->getNumber())) {
    echo "Even: Yes<br>";
} else {
    echo "Even: No<br>";
}

if ($firstNumber->isOdd($firstNumber->getNumber())) {
    echo "Odd: Yes<br>";
} else {
    echo "Odd: No<br>";
}

if ($firstNumber->isPrime()) {
    echo "Prime: Yes<br>";
} else {
    echo "Prime: No<br>";
}


// Change the first number using the setter
$firstNumber->setNumber(16);

echo "<h3>First Object After Setter</h3>";

echo "Number: " . $firstNumber->getNumber() . "<br>";

echo "Even: " .
    ($firstNumber->isEven($firstNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Odd: " .
    ($firstNumber->isOdd($firstNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Prime: " .
    ($firstNumber->isPrime() ? "Yes" : "No") .
    "<br>";


// Create second object
$secondNumber = new XavierMyInteger(17);

echo "<h2>Second Object</h2>";

echo "Number: " . $secondNumber->getNumber() . "<br>";

echo "Even: " .
    ($secondNumber->isEven($secondNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Odd: " .
    ($secondNumber->isOdd($secondNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Prime: " .
    ($secondNumber->isPrime() ? "Yes" : "No") .
    "<br>";


// Change the second number using the setter
$secondNumber->setNumber(24);

echo "<h3>Second Object After Setter</h3>";

echo "Number: " . $secondNumber->getNumber() . "<br>";

echo "Even: " .
    ($secondNumber->isEven($secondNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Odd: " .
    ($secondNumber->isOdd($secondNumber->getNumber()) ? "Yes" : "No") .
    "<br>";

echo "Prime: " .
    ($secondNumber->isPrime() ? "Yes" : "No") .
    "<br>";

?>

</body>
</html>