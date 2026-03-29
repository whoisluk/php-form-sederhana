<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Form Data Mahasiswa</h1>

    <!-- PENTING: action ke result.php -->
    <form method="POST" action="result.php">
        <input type="text" name="firstName" placeholder="First Name" required>
        <input type="text" name="lastName" placeholder="Last Name" required>
        <input type="text" name="phoneNumber" placeholder="Phone Number" required>
        <textarea name="address" placeholder="Address" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>