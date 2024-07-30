<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $mem = $_POST['mem'];

    $sql = "INSERT INTO registeri (Name, email, address, mem) VALUES ('$name', '$email', '$address', '$mem')";

    if ($conn->query($sql) === TRUE) {
        header("Location: info.php");
    } else {
        echo "Error: ";
    }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="reg.css">
  </head>
  <body>
  <div class="background">
    <div class="form-wrapper">
        <h2>Registeration form</h2>
        <form method="post" action="register.php" class="form-container">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="mem">Membership:</label>
                <input type="text" id="mem" name="mem" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
  </body>
</html>
