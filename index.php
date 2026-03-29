<?php
include 'Person.php';

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];

    $person = new Person($firstName, $lastName, $phoneNumber, $address);
    $result = $person->displayData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sederhana PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Form Sederhana</h1>

    <form method="POST" action="">
        <input type="text" name="firstName" placeholder="Firstname" required>
        <input type="text" name="lastName" placeholder="Lastname" required>
        <input type="text" name="phoneNumber" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" rows="4" required></textarea>
        <button type="submit">Submit</button>
    </form>

    <?php
        echo $result;
    ?>
</div>

</body>
</html>