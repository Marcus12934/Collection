<h1>Welcome to my collection of records</h1>

<?php

require 'functions.php';

$records = getRecordsFromDB();
echo displayRecords($records);

?>
