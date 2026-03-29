<?php
include 'Person.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $person = new Person(
        $_POST['firstName'],
        $_POST['lastName'],
        $_POST['phoneNumber'],
        $_POST['address']
    );

    $result = $person->displayData();
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasil Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Hasil Input</h1>

    <div class="result">
        <?php echo $result; ?>
    </div>

    <br>
    <a href="index.php">
        <button>Kembali</button>
    </a>
</div>

</body>
</html>