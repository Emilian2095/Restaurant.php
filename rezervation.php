<?php
if (isset($_POST)) {
    $dateTime = "datetime";
    $time = "time";
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
    <nav class="navbar navbar-expand-lg position-fixed">
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
    <form method="post">

        <label for="datetime">Select the time and date</label>
        <input type="datetime-local" name="datetime" id="datetime">
        <label for="time">Select for how long</label>
        <input type="number" name="time" id="time">

        <button type="submit" name="reserve">Reserve</button>

    </form>
</body>

</html>