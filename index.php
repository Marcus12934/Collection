<h1>Welcome to my collection of records</h1>

<?php

require 'functions.php';

$db = database();

foreach ($db as $data) {
    echo '<div class="textbox">' . '<img src="' . $data['cover'] . '"alt="Album cover">' . $data['name'] . ' was an album by ' . $data['band'] . '. The album was released on ' . formatDate($data['release']) . ' and has '. $data['numSongs'] . ' songs.' . '</div>';
}

?>
