<?php
require 'functions.php';

$db = getDb();

$records = getRecordsFromDB($db);

$result = displayRecords($records);

$date = date('Y-m-d');
echo $date;
?>

<head>
    <title>Marcus Collection</title>
    <link rel="icon" href="record.jpg">
    <meta name="viewport" content="width=device-width">
    <link href="normalizeCollection.css" rel="stylesheet" type="text/css">
    <link href="styleCollection.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <h1>Welcome to my collection of records</h1>
</header>
<div class="albums"><?php echo $result ;?></div>

<div class="button">
    <a href="addition.php">Add Album</a>
</div>
</body>
