<?php


require_once "data/db_connect.php";


$sql = "SELECT * FROM `dishes`";

$result = mysqli_query($conn, $sql);

$layout = "";
if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($rows as $row) {
        $layout .= "
        <div class='card p-0' style='width: 20rem;'>
  <img src='$row[image]' class='card-img-top' alt='...'>
  <div class='card-body'>
    <h5 class='card-title'>$row[name]</h5>
     <a href='details.php?details={$row['id']}' class='btn btn-primary'>Details</a>
     <a href='delete.php?id={$row['id']}' class='btn btn-danger'>Delete</a>
       </div>
</div>
    ";
    }
} else {
    $layout = "No results found!";
};



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/dishes.css">
    <script src="https://kit.fontawesome.com/277778bc91.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg  ">
        <div class="container-fluid">
            <span class="navbar-brand" href="#"><span>Ze Food</span></span>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">
                            <span id="links"><span class="colorLink">Home</span></span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="form.php">
                            <span id="links"><span class="colorLink">Add</span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container1 text-center">
        <div class="row row-cols-1 row-cols-md-2 row-cols-sm-1 row-cols-lg-3  ">
            <?= $layout ?>
        </div>
    </div>
    <footer>
        <ul>
            <li>
                <a href="https://www.facebook.com/CodeFactoryVienna" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/codefactoryvienna/" target="_blank"><i class="fa-brands fa-square-instagram"></i></a>
            </li>
            <li>
                <a href="https://github.com/Emilian2095" target="_blank"><i class="fa-brands fa-github"></i></a>
            </li>
            <li>
                <a
                    href="https://www.linkedin.com/company/codefactory-vienna/posts/?feedView=all" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </li>
            <li>
                <a href="https://www.youtube.com/@codefactory6508" target="_blank"><i class="fa-brands fa-youtube"></i></a>
            </li>
        </ul>
        <p>All the rights are Reserved &copy; Emilian</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>