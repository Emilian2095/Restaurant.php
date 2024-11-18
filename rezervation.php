<?php
if (isset($_POST["reserve"])) {
    $name = "name";
    $email = "email";
    $dateTime = $_POST["datetime"];
    $time = "time";
    $hourTime = $_POST["hourTime"];
    $hourOnly = intval(substr($hourTime, 0, 2));


    $response = "";

    if ($hourOnly >= 7 && $hourOnly <= 12) {
        $response = "Your reservation has been saved";
    } else {
        $response = "We are not open at the chossen time";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/reserve.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span class="title">Ze Food</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="dashboard.php">Home</a>
                    </li>
                    <li> <a class="nav-link text-light" href="logout.php?logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="title">
        <h1>Online Reservation</h1>
    </div>
    <div class="message"><?= $response ?? "" ?></div>
    <form method="post">

        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required>
        <label for="datetime">Select date</label>
        <input type="date" name="datetime" id="datetime" required>
        <label for="time">Select the time</label>
        <input type="time" min="09:00" max="18:00" name="hourTime" id="time" required>
        <label for="number">Select for how long</label>
        <input type="number" name="number" id="number" required>


        <button type="submit" name="reserve">Reserve</button>

    </form>
</body>

</html>