<?php
require_once('functions.php');
require_once('session.php');

$db = linkDB();
$mice = getDataFromDB($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
require_once('HTMLhead.php');
?>
    <title>Mouse Collection</title>
</head>

<body>
<nav>
    <?php
    require_once('HTMLnav.php');
    ?>
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
