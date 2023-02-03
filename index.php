<!DOCTYPE html>
<html lang="en">
<?php
require_once __DIR__ . '/models/Movie.php';
require_once __DIR__ . '/db.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>

<body>
    <h1>prova</h1>
    <div class="container_movie">
        <?php
        foreach ($movies as $movie) {
            echo $movie->getMovie();
        }
        ?>
    </div>
</body>

</html>