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
    <?php
    if (!empty($_GET['success'])) {
        echo '<p id="successMessage">' . $_SESSION['success']['mouseName'] . ' ' . $_SESSION['success'][$_GET['success']] . '</p>';
    }
    ?>
    <div class="collection">
        <?php
        echo displayMouseOnPage($mice);
        ?>
    </div>
</main>
</body>

</html>
