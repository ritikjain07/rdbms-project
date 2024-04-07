<?php
$insert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect post variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "rj_register"; 
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Inserting data into the database
    $sql = "INSERT INTO `register_user_rj` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";

    if (mysqli_query($conn, $sql)) {
        $insert = true;
        // Redirect to the home page after successful registration
        header("Location: home_page.php"); // Replace 'home_page.php' with the actual URL of your home page
        exit(); // Make sure to exit after redirecting to prevent further execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherry fashion</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg.jpg" alt="Cherry Registration">
    <div class="container">
        <h1>Welcome to Cherry Clothing Brand Registration</h1>
        <p>Sign up to receive the latest updates and exclusive offers from our clothing brand! </p>
        <?php
        if ($insert == true) {
            echo "<p class='submitMsg'>Thank you for registering with us! We Hope you guys have a Great Experience!</p>";
        }
        ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="text" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn" type="submit">Submit</button>
        </form>
    </div>
    <!-- <script src="index.js"></script> -->
</body>
</html>

