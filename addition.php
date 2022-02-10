<head>
    <title>Add Album</title>
    <link rel="icon" href="record.jpg">
    <meta name="viewport" content="width=device-width">
    <link href="normalizeCollection.css" rel="stylesheet" type="text/css">
    <link href="styleAddition.css" rel="stylesheet" type="text/css">
</head>

<header>
    <div class="welcome">
        <h1>Welcome</h1>
    </div>
</header>

<body>
<div class="main">
    <form action="validateAddition.php" method="post" class="form">
        <div class="input">
            <label for="cover">Album cover url:</label>
            <input type="url" id="cover" name="cover">
        </div>
        <div class="input">
            <label for="name">Album name:</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="input">
            <label for="band">Band name:</label>
            <input type="text" id="band" name="band">
        </div>
        <div class="input">
            <label for="release">Release date:</label>
            <input type="date" id="release" name="release" min="1950-01-01">
        </div>
        <div class="input">
            <label for="numSongs">Number of songs:</label>
            <input type="number" id="numSongs" name="numSongs" min="1" max="30">
        </div>
        <input type="submit" value="Submit" class="submit">
    </form>
</div>
</body>
