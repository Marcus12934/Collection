<?php

function database()
{
    $db = new PDO('mysql:host=db; dbname=marcus-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `cover`, `name`, `band`, `release`, `numSongs` FROM `albums`;");
    $query->execute();

    return $query->fetchAll();
}

$db = database();

function formatDate(string $date): string
{
    $formattedDate = date_create($date);
    return date_format($formattedDate,"j/F/Y");
}

$i = 0;
$arrayLength = count($db);

function records($db): string
{
    $i = 0;
    $arrayLength = count($db);
    while ($i < $arrayLength)
        foreach ($db as $data) {
            return '<div class="textbox">' . '<img src="' . $data['cover'] . '"alt="Album cover">' . $data['name'] . ' was an album by ' . $data['band'] . '. The album was released on ' . formatDate($data['release']) . ' and has '. $data['numSongs'] . ' songs.' . '</div>';
        }
}