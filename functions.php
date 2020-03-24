<?php

function displayMouseOnPage(array $mice)
{

    foreach ($mice as $mouse) {
        echo '<div class="mouseDiv">';
        echo '<h6>' . $mouse["name"] . '</h6>';
        echo "<img src='" . $mouse["image"] . "'>";
        echo '<p>Brand: ' . $mouse["brand"] . '<p>';
        if (!empty($mouse['weight'])) {
            echo '<p>Weight: ' . $mouse["weight"] . 'g<p>';
        }
        echo '</div>';
    }
}
function linkDB()
{
    $db = new PDO('mysql:host=DB;dbname=collectionproject', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
function getDataFromDB(PDO $db)
{
    $query = $db->query("SELECT * FROM `computerMice` WHERE (`name` IS NOT NULL AND `brand` IS NOT NULL);");
    return $query->fetchAll();

}
