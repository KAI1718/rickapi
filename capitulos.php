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
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid ">
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
                $url = "https://rickandmortyapi.com/api/episode/";
                $json = file_get_contents($url);
                $data = json_decode($json, true);
                $results = $data['results'];
                foreach ($results as $result) {
                    $name = $result['name'];
                    $episode = $result['episode'];
                    $air_date = $result['air_date'];
                    $url = $result['url'];
                    $created = $result['created'];
                    echo "<div class='col-12 col-md-6 col-lg-4 col-xl-3 mt-5'>
                    <div class='card mb-3'>
                            <div class='card-body'>
                                <h5 class='card-title'>$name</h5>
                                <p class='card-text'>Episode: $episode</p>
                                <p class='card-text'>Air date: $air_date</p>
                                <p class='card-text'>Url: $url</p>
                                <p class='card-text'>Created: $created</p>
                            </div>
                        </div>
                    </div>";
                }
                                    
            ?>
        </div>
    </div>
    
    <div class="container">
        <div class="row">
            <?php
            ?>
        </div>
    </div>

</body>


</html>