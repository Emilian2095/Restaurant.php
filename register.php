<?php

require_once "data/db_connect.php";
require_once "file_upload.php";

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
$error = false;
$name = $email = '';
$nameError = $emailError = $passwordError = '';
if (isset($_POST['register'])) {
    $name = cleaningInputs($_POST['name']);
    $email = cleaningInputs($_POST['email']);
    $password = cleaningInputs($_POST['password']);
    $image = fileUpload($_FILES['image']);
    if (empty($name)) {
        $error = true;
        $nameError = "Please enter your name";
    } else if (strlen($name) < 3) {
        $error = true;
        $nameError = "Name must be at least 3 characters";
    } else if (!preg_match("/^[a-zA-Z]+$/", $name)) {
        $error = true;
        $nameError = "Name cannot contain numbers!";
    }
    if (empty($email)) {
        $error = true;
        $emailError = "Please enter your email!";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = true;
        $emailError = "Please enter a valid email";
    } else {
        $sql = "SELECT email FROM `register` WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) != 0) {
            $error = true;
            $emailError = "Provided email is already in use";
        }
    }

    if (empty($password)) {
        $error = true;
        $passwordError = "Please enter a password";
    } else if (strlen($password) < 6) {
        $error = true;
        $passwordError = "Password must have at least 6 characters";
    }
    if (!$error) {
        $password = hash("sha256", $password);
        $sql = "INSERT INTO `register`(`name`, `email`, `password`, `image`) VALUES ('$name','$email','$password','$image[0]')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            header("Location: login.php");
        } else {
            echo "<div class='alert alert-danger' role='alert'>
                    <p>Something went wrong. Please try again later</p>
                </div>";
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




    <form method="post" enctype="multipart/form-data">
        <span class="h1">Register</span>
        <label for="name">
            <span>Name:</span><input type="text" id="name" name="name">
            <p style="color: white"><?= $nameError ?></p>
        </label>
        <label for="email">
            <span>Email:</span><input type="text" id="email" name="email">
            <p style="color: white"><?= $emailError ?></p>

        </label>
        <label for="password">
            <span>Password:</span><input type="password" id="password" name="password">
            <p style="color: white"><?= $passwordError ?></p>

        </label>

        <span>Image:</span><input class="file" type="file" name="image">

        <input class="btn" type="submit" name="register" value="Register">
        <div class="noAccount"><span class="noAccount1">you have an account? <button><a class="register" href="login.php">login here</a></button></span></div>
    </form>

</body>

</html>