<?php
require 'functions.php';

$db = getDb();

$records = getRecordsFromDB($db);

?>

<head>
    <title>Marcus Collection</title>
    <meta name="viewport" content="width=device-width">
    <link href="normalizeCollection.css" rel="stylesheet" type="text/css">
    <link href="styleCollection.css" rel="stylesheet" type="text/css">
</head>

<body>
<header>
    <h1>Welcome to my collection of records</h1>
</header>
<div class="albums">
    <?php echo displayRecords($records); ?>
</div>

</body>
