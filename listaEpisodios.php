<?php
//Crear un array con todos los episodios de la serie
//para mostrarlos con un paginador en la pagina capitulos.php


const API_URL = "https://rickandmortyapi.com/api/episode/";

function getEpisodes($url = API_URL) {
    $json = file_get_contents($url);
    $data = json_decode($json, true);
    return $data;
}

function getEpisodesList($episodes) {
    $results = $episodes['results'];
    $episodesList = [];
    foreach ($results as $result) {
        $episodesList[] = $result;
    }
    return $episodesList;
}

function getEpisodesPages($episodes) {
    $pages = $episodes['info']['pages'];
    return $pages;
}


$episodes = getEpisodes();
$episodesList = getEpisodesList($episodes);
$pages = getEpisodesPages($episodes);

?>