<?php

function database()
{
    $db = new PDO('mysql:host=db; dbname=marcus-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `cover`, `name`, `band`, `release`, `numSongs` FROM `albums`;");
    $query->execute();

    return $query->fetchAll();
}

function formatDate(string $date): string
{
    $formatedDate = date_create($date);
    return date_format($formatedDate,"j/F/Y");
}
