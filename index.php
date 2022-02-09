<?php
require 'functions.php';

$db = getDb();

$records = getRecordsFromDB($db);

$result = displayRecords($records);
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
<div class="albums"><?php echo $result;?></div>

<div>
<!--Action will contain marcus-collection.sql-->
    <form action="#" method="post">
        <label for="cover">Album cover file</label>
        <input type="file" id="cover" name="cover">
        <label for="name">Album name</label>
        <input type="text" id="name" name="name">
        <label for="band">Band name</label>
        <input type="text" id="band" name="band">
        <label for="release">Release date</label>
        <input type="date" id="release" name="release" min="1950-01-01">
        <label for="numSongs">Number of songs</label>
        <input type="number" id="numSongs" name="numSongs">
    </form>
</div>

</body>
