<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Rick and Morty</title>
</head>

<body class="bg">
    <header class="text-center">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/Rick_and_Morty.svg" alt="Logo Rick_and_Morty" class="img-fluid rick">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="capitulos.php">Capítulos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-5" href="personajes.php">Personajes</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="container">
        <div class="row">
            <?php
                $url = "https://rickandmortyapi.com/api/character";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $characters = $data['results'];

                foreach (array_slice($characters, 0, 12) as $character) {
                    echo '<div class="col-6 col-md-4 col-lg-3 mt-5">';
                    echo '<div class="card mb-3">';
                    echo '<img src="' . $character['image'] . '" class="card-img-top" alt="...">';
                    echo '<div class="card-body">';
                    echo '<h5 class="card-title">' . $character['name'] . '</h5>';
                    echo '<p class="card-text">Especie: ' . $character['species'] . '</p>';
                    echo "<p class='card-text'>Género: ".$character['gender']."</p>";
                    echo '<p class="card-text">Estado: ' . $character['status'] . '</p>';
                    echo "<a href='".$character['url']."' class='btn btn-primary'>Ver más</a>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>

    <div class="container">
        <ul class="pagination justify-content-center mt-4" id="pagination">
            <?php
                //
            ?>
        </ul>
    </div>

</body>

<script src="assets/js/bootstrap.min.js"></script>



</html>