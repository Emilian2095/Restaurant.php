<?php

require_once "data\db_connect.php";

$detailsfromURL = $_GET["details"];

$sql = "SELECT * FROM `dishes` WHERE id ={$detailsfromURL}";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);



$layout = "

        <div class='details1'>
                
                <img src=' $row[image] ' class='rounded' alt='...'>
          
                    <h5 text-warning>$row[name]</h5><hr>


                    <p><b>Main ingredient:</b> $row[recipe]</p>
                    <p><b>Origin:</b> <a class='author'href='https://en.wikipedia.org/wiki/$row[origin]' target='_blank'>$row[origin]</a></p>
                    
                    <p><b>Price: </b> <span class='price'>$row[price]<span> €</span>
                   
                    <p><b>Available:</b> <span class=" . ($row['available'] == 1 ? 'text-success' : 'text-danger') . ">" . ($row['available'] == 1 ? 'Available' : 'Not Available') . " </span></p>
        </div> 
        
";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/details.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg  ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><span>Ze Food</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><span id="links">Home</span></a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>

    <div class="details"><?= $layout ?></div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>