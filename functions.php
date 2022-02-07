<?php

function database()
{
    $db = new PDO('mysql:host=db; dbname=marcus-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $query = $db->prepare("SELECT `cover`, `name`, `band`, `release`, `numSongs` FROM `albums`;");
    $query->execute();
    $result = $query->fetchAll();
    echo '<pre>';
    var_dump($result);
    echo '</pre>';
}