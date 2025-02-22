<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Contact Form</h2>

    <form action="#" method="post">
        <!-- Name Field -->
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <!-- Email Field -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Date Field -->
         <label for="date">Date:</label><br>
         <input type="date" id="date" name="date" required><br><br>

         <!-- Phone Number Field -->
          <label for="phone">Phone Number:</label><br>
          <input type="number" id="phone" name="phone" pattern="[0-9] {10}" placeholder="1234567890" required><br><br>

          <!-- Submit button -->
           <input type="submit" value="Submit">
    </form>


</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$date = htmlspecialchars($_POST['date']);
$phone = htmlspecialchars($_POST['phone']);

//db connection
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "cruddb";
$conn = "";

$conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if(!$conn){
echo"Could not connect!";
    exit;
}

if ($conn) {
    $stmt = $conn->prepare("INSERT INTO registration (name, email, date, phone) VALUES (?, ?, ?, ?)");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sssi", $name, $email, $date, $phone);

    if ($stmt->execute()) {
        echo "Registration successful...";
    } else {
        echo "Error executing statement: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Database connection failed.";
}

echo "<h2>Form Submission Results:</h2>";
echo "Name: " . $name . "<br>";
echo "Email: " . $email . "<br>";
echo "Date: " . $date . "<br>";
echo "Phone Number: " . $phone . "<br>";

}
?>






