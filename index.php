<?php

require 'functions.php';

$db = database();

echo '<pre>';
var_dump($db);
echo '<pre>';

foreach ($db as $data) {
    echo $data['name'] . ' was an album by ' . $data['band'] . '. The album was released in ' . $data['release'] . ' and has '. $data['numSongs'] . ' songs.<br>';
}
