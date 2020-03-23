<?php

$db = new PDO('mysql:host=DB;dbname=collectionproject', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query("SELECT * FROM `computerMice`");
$mice = $query->fetchAll();


?>

<!DOCTYPE html>
<html lang="en">
<body
    <nav>
    <h2>Mouse Collection</h2>
        <a>Collection</a>
        <a>Coming soon!</a>
    </nav>
<main>
    <?php
    foreach ($mice as $mouse) {
        echo '<h6>' . $mouse["name"] . '</h6>';
        echo '<p>Brand: ' . $mouse["brand"] . '<p>';
        echo '<p>Weight: ' . $mouse["weight"] . 'g<p>';
    }
    ?>
</main>


</body>
</html>
