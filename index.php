<?php
include 'Person.php';

$result = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person = new Person(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['phoneNumber'],
        $_POST['address']
    );

    $result = $person->displayData();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Form Data Mahasiswa</h1>
    <p class="subtitle">Silakan isi data dengan benar</p>

    <form method="POST">
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <input type="text" name="phoneNumber" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" rows="4" required></textarea>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (!empty($result)) {
        echo "<div class='result'>$result</div>";
    }
    ?>
</div>

</body>
</html>