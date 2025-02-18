<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>
    <h2>Contact Form</h2>

    <form action="submit_form.php" method="post">
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
          <input type="tel" id="phone" name="phone" pattern="[0-9] {10}" placeholder="1234567890" required><br><br>

          <!-- Submit button -->
           <input type="submit" value="Submit">
    </form>


</body>
</html>