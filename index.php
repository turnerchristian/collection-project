<?php
require_once('functions.php');
$db = linkDB();
$mice = getDataFromDB($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Mouse Collection</title>
    <link rel="stylesheet" type="text/css" href="collection.css">
    <link rel="stylesheet" type="text/css" href="normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Da+2|Permanent+Marker&display=swap" rel="stylesheet">
</head>

<body>
<nav>
    <h2>The Mouse Collection</h2>
    <div class="navLinks">
        <a>Coming soon!</a>
    </div>
</nav>
<main>
    <div class="collection">
        <?php
        echo displayMouseOnPage($mice);
        ?>
    </div>
</main>
</body>

</html>
