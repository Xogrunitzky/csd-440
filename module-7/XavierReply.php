<?php

// Get the information from the form
$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$age = $_POST["age"] ?? "";
$subject = $_POST["subject"] ?? "";
$contact_date = $_POST["contact_date"] ?? "";
$message = trim($_POST["message"] ?? "");
$newsletter = $_POST["newsletter"] ?? "";

// Create an empty list for errors
$errors = [];

// Check the name
if ($name == "") {
    $errors[] = "Name is required.";
}

// Check the email
if ($email == "") {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Please enter a valid email.";
}

// Check the age
if ($age == "") {
    $errors[] = "Age is required.";
} elseif (!filter_var($age, FILTER_VALIDATE_INT)) {
    $errors[] = "Age must be a whole number.";
}

// Check the subject
if ($subject == "") {
    $errors[] = "Please select a subject.";
}

// Check the date
if ($contact_date == "") {
    $errors[] = "Contact date is required.";
}

// Check the message
if ($message == "") {
    $errors[] = "Message is required.";
}


// If there are errors, display them
if (count($errors) > 0) {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Error</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .box {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
        }

        h2 {
            color: red;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>Form Errors</h2>

    <?php
    foreach ($errors as $error) {
        echo "<p>$error</p>";
    }
    ?>

    <a href="XavierForm.html">Go Back</a>

</div>

</body>
</html>

<?php

} else {

    // Decide whether the user wants the newsletter
    if ($newsletter == "yes") {
        $newsletter_answer = "Yes";
    } else {
        $newsletter_answer = "No";
    }

    // Protect the information before displaying it
    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $subject = htmlspecialchars($subject);
    $contact_date = htmlspecialchars($contact_date);
    $message = htmlspecialchars($message);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Results</title>

    <style>
        body {
            font-family: Arial;
            background-color: #f2f2f2;
        }

        .box {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
        }

        h2 {
            color: green;
        }
    </style>
</head>

<body>

<div class="box">

    <h2>Thank You!</h2>

    <p><strong>Name:</strong> <?php echo $name; ?></p>

    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <p><strong>Age:</strong> <?php echo $age; ?></p>

    <p><strong>Subject:</strong> <?php echo $subject; ?></p>

    <p><strong>Contact Date:</strong> <?php echo $contact_date; ?></p>

    <p><strong>Message:</strong> <?php echo $message; ?></p>

    <p><strong>Newsletter:</strong> <?php echo $newsletter_answer; ?></p>

</div>

</body>
</html>

<?php
}
?>
