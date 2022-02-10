<?php

$data = $_POST;
$cover = filter_var($data['cover'], FILTER_SANITIZE_URL);
$name = filter_var($data['name'], FILTER_SANITIZE_URL);
$band = filter_var($data['band'], FILTER_SANITIZE_URL);
$release = filter_var($data['release'], FILTER_SANITIZE_NUMBER_INT);
$numSongs = filter_var($data['numSongs'], FILTER_SANITIZE_NUMBER_INT);
$date = date('Y-m-d');

echo '<pre>';
var_dump($data);
echo '<pre>';

if (
    isset($cover) &&
    isset($name) &&
    isset($band) &&
    isset($release) &&
    isset($numSongs)
) {
    if ($release<$date && $release>'1950-01-01') {
        $return = '';
    } else {
        $return = 'ERROR! Invalid date';
    }
    if ($numSongs<30 && $numSongs>0) {
        $return = '';
    } else {
        echo 'ERROR! Pick a number between 1 and 30';
    }
    if ($cover !== )
} else {
    return "ERROR! Missing information";
}

//header('location: index.php');