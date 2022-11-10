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
    
    <div class="text-center">
        <p class="fs-2 text-white mt-4">Personajes Episodio 1</p>
    </div>

    <div class="container">
        <div id="infoCharacters" class="row">
            <?php
            $url = "https://rickandmortyapi.com/api/episode/1";
            $json = file_get_contents($url);
            $data = json_decode($json, true);
            $characters = $data['characters'];

            foreach ($characters as $character) {
                $json = file_get_contents($character);
                $data = json_decode($json, true);
                $name = $data['name'];
                $image = $data['image'];
                $status = $data['status'];
                $species = $data['species'];
                $gender = $data['gender'];

                echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 mt-4'>
                        <div class='card mb-3'>
                            <img src='$image' class='card-img-top' alt='Imagen de $name'>
                            <div class='card-body'>
                                <h5 class='card-title'>$name</h5>
                                <p class='card-text'>Estatus: $status</p>
                                <p class='card-text'>Especie: $species</p>
                                <p class='card-text'>Genero: $gender</p>
                            </div>
                        </div>
                    </div>";                
            }
            

            ?>
        </div>
    </div>

    <hr style="background-color: #FFFFFF; height: 10px;">
    <div class="text-center">
        <p class="fs-2 text-white">Personajes Aleatorios</p>
    </div>

    <div class="container">
        <div class="row">
            <?php
                //3 personajes aleatorios en tarjetas 
                $url = "https://rickandmortyapi.com/api/character";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $results = $data['results'];
                $characters = array_rand($results, 3);

                foreach ($characters as $character) {
                    $name = $results[$character]['name'];
                    $image = $results[$character]['image'];
                    $status = $results[$character]['status'];
                    $species = $results[$character]['species'];
                    $gender = $results[$character]['gender'];

                        //3 tarjetas centradas
                        echo "<div class='col-12 col-md-6 col-lg-4 col-xl-4 mt-5'>
                                <div class='card mb-3'>
                                    <img src='$image' class='card-img-top' alt='Imagen de $name'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$name</h5>
                                        <p class='card-text'>Estatus: $status</p>
                                        <p class='card-text'>Especie: $species</p>
                                        <p class='card-text'>Genero: $gender</p>
                                    </div>
                                </div>
                            </div>";
                }
            ?>
        </div>
    </div>

</body>

<script src="assets/js/bootstrap.min.js"></script>




</html>

