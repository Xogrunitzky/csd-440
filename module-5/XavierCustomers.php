<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xavier Customers</title>
</head>

<body>

    <h1>Customer Information</h1>

    <?php

    // Create an array containing 10 customers.
    // Each customer has a first name, last name, age, and phone number.
    $customers = [
        [
            "firstName" => "John",
            "lastName" => "Smith",
            "age" => 25,
            "phone" => "402-555-1001"
        ],
        [
            "firstName" => "Sarah",
            "lastName" => "Johnson",
            "age" => 32,
            "phone" => "402-555-1002"
        ],
        [
            "firstName" => "Michael",
            "lastName" => "Brown",
            "age" => 45,
            "phone" => "402-555-1003"
        ],
        [
            "firstName" => "Emily",
            "lastName" => "Davis",
            "age" => 28,
            "phone" => "402-555-1004"
        ],
        [
            "firstName" => "David",
            "lastName" => "Wilson",
            "age" => 51,
            "phone" => "402-555-1005"
        ],
        [
            "firstName" => "Jessica",
            "lastName" => "Miller",
            "age" => 36,
            "phone" => "402-555-1006"
        ],
        [
            "firstName" => "Robert",
            "lastName" => "Moore",
            "age" => 22,
            "phone" => "402-555-1007"
        ],
        [
            "firstName" => "Ashley",
            "lastName" => "Taylor",
            "age" => 41,
            "phone" => "402-555-1008"
        ],
        [
            "firstName" => "Daniel",
            "lastName" => "Anderson",
            "age" => 30,
            "phone" => "402-555-1009"
        ],
        [
            "firstName" => "Maria",
            "lastName" => "Thomas",
            "age" => 55,
            "phone" => "402-555-1010"
        ]
    ];

    ?>

    <h2>All Customers</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Phone Number</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer["firstName"] ?></td>
                <td><?= $customer["lastName"] ?></td>
                <td><?= $customer["age"] ?></td>
                <td><?= $customer["phone"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>


    <?php

    // --------------------------------------------------
    // ARRAY METHOD 1: Find customers who are 30 or older
    // --------------------------------------------------

    $customersOver30 = array_filter($customers, function ($customer) {
        return $customer["age"] >= 30;
    });

    ?>

    <h2>Customers Age 30 or Older</h2>

    <ul>
        <?php foreach ($customersOver30 as $customer): ?>
            <li>
                <?= $customer["firstName"] . " " . $customer["lastName"] ?>
                - Age: <?= $customer["age"] ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <?php

    // --------------------------------------------------
    // ARRAY METHOD 2: Find customers whose last name
    // starts with the letter M
    // --------------------------------------------------

    $customersLastNameM = array_filter($customers, function ($customer) {
        return strtoupper($customer["lastName"][0]) === "M";
    });

    ?>

    <h2>Customers With Last Name Starting With M</h2>

    <ul>
        <?php foreach ($customersLastNameM as $customer): ?>
            <li>
                <?= $customer["firstName"] . " " . $customer["lastName"] ?>
                - <?= $customer["phone"] ?>
            </li>
        <?php endforeach; ?>
    </ul>


    <?php

    // --------------------------------------------------
    // ARRAY METHOD 3: Extract all first names
    // --------------------------------------------------

    $firstNames = array_column($customers, "firstName");

    ?>

    <h2>Customer First Names</h2>

    <ul>
        <?php foreach ($firstNames as $name): ?>
            <li><?= $name ?></li>
        <?php endforeach; ?>
    </ul>


    <?php

    // --------------------------------------------------
    // ARRAY METHOD 4: Sort customers by age
    // --------------------------------------------------

    usort($customers, function ($a, $b) {
        return $a["age"] <=> $b["age"];
    });

    ?>

    <h2>Customers Sorted By Age</h2>

    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Phone Number</th>
        </tr>

        <?php foreach ($customers as $customer): ?>
            <tr>
                <td>
                    <?= $customer["firstName"] . " " . $customer["lastName"] ?>
                </td>
                <td><?= $customer["age"] ?></td>
                <td><?= $customer["phone"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>
</html>