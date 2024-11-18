<?php

session_start();

if (isset($_SESSION["register"])) { // if a session "register" is exist and have a value
    header("Location: dashboard.php"); // redirect the register to the index page
}

if (isset($_SESSION["admin"])) { // if a session "admin" is exist and have a value
    header("Location: index.php"); // redirect the adminin to the dashboard page
}

require_once "data/db_connect.php";

$error = false;  // by default, a varialbe $error is false, means there is no error in our form

$email = ""; // define variables and set them to empty string
$emailError = $passwordError = $nameError =  $loginError = ""; // define variables that will hold error messages later, for now empty string 

if (isset($_POST["login"])) {
    $email = cleaningInputs($_POST["email"]);
    $password = cleaningInputs($_POST["password"]);

    // simple validation for the "date of birth"
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { // if the provided text is not a format of an email, error will be true
        $error = true;
        $emailError = "Please enter a valid email address";
    }

    // simple validation for the "password"
    if (empty($password)) {
        $error = true;
        $passwordError = "Password can't be empty!";
    }

    if (!$error) { // if there is no error with any input, data will be inserted to the database
        // hashing the password before inserting it to the database
        $password = hash("sha256", $password);

        $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";

        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) == 1) {
            if ($row["status"] == "admin") {
                $_SESSION["admin"] = $row["id"]; // here a new session will be created with the name admin and it will save the register id 
                header("Location: index.php");
            } else {
                $_SESSION["register"] = $row["id"]; // here a new session will be created with the name register and it will save the register id 
                header("Location: dashboard.php");
            }
        } else {
            $loginError = "
    <div class='login-error'>Something went wrong. Please try again later </div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/register.css">
</head>

<body>


    <?= $loginError ?>


    <form method="post" enctype="multipart/form-data">
        <span class="h1">Login</span>
        <label for="name">
            <span>Name:</span><input type="text" id="name" name="name">
            <p class="error"><?= $nameError ?></p>
        </label>
        <label for="email">
            <span>Email:</span><input type="text" id="email" name="email">
            <p class="error"><?= $emailError ?></p>

        </label>
        <label for="password">
            <span>Password:</span><input type="password" id="password" name="password">
            <p class="error"><?= $passwordError ?></p>

        </label>

        <button name="login" type="submit" class="btn ">Login</button>

        <div class="noAccount"><span class="noAccount1">you don't have an account? <button><a class="register1" href="register.php">register here</a></button></span></div>
    </form>

</body>

</html>