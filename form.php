<?php
require_once "data\db_connect.php";

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $image = $_POST["image"];
    $available = $_POST["available"];
    $price = $_POST["price"];
    $recipe = $_POST["recipe_name"];
    $origin = $_POST["origin_name"];



    $sql = "INSERT INTO `dishes`(`name`, `image`, `available`, `price`, `recipe_name`, `origin_name`)
            VALUES ('$name', '$image', '$available', '$price', '$recipe', '$origin')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: index.php");
    } else {
        echo "Error";
    }
}
?>


<!DOCprice html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/form.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>
        <nav class="navbar navbar-expand-lg  ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><span>Ze Food</span></a>
                <button class="navbar-toggler" price="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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


        <form class="form" method="POST">
            <input class="inputs" type="text" name="name" id="fname" placeholder="name" required>
            <input class="inputs" type="text" name="image" id="image" placeholder="Image" required>
            <input class="inputs" type="text" name="available" id="desc" placeholder="available" required>
            <input class="inputs" type="text" name="price" id="price" placeholder="price" required>
            <input class="inputs" type="text" name="recipe_name" id="autor" placeholder="recipe" required>
            <input class="inputs" type="text" name="origin_name" id="origin" placeholder="origin" required>

            <a class="btn submit" href="#"><input type="submit" name="submit"></a>
        </form>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>

    </body>

    </html>