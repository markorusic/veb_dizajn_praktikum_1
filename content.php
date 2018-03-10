<?php

$movies = json_decode(file_get_contents('content/movies.json'), true);

function findMovie($id, $movies) {
    foreach ($movies as $i => $movie) {
        if($movie['id'] == $id)
            return $movie;
    }
    return null;
}

function getGenres($movies) {
    $genres = [];
    foreach ($movies as $movie) {
        $movieGenres = explode(',', $movie['genres']);
        foreach($movieGenres as $genre)
            if(!in_array($genre, $genres))
                array_push($genres, $genre);
    }
    return $genres;
}

function getReccomended($id, $movies, $len) {
    $reccomendedMovies = [];
    if(!isset($id) || is_null($id))
        $id = $movies[0]['id'];
    foreach ($movies as $index => $movie) {
        if(count($reccomendedMovies) >= $len)
            break;
        if($movie['id'] != $id)
            array_push($reccomendedMovies, $movie);
    }
    return $reccomendedMovies;
}

function getByIDs($ids, $movies) {
    $wantedMovies = [];
    foreach ($movies as $index => $movie) {
        if(in_array($movie['id'], $ids))
            array_push($wantedMovies, $movie);
    }
    return $wantedMovies;
}