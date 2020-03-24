<?php

function displayMouseOnPage(array $mice): string
{
    $echo = '';
    foreach ($mice as $mouse) {
        $echo .= '<div class="mouseDiv">' .
            '<h6>' . $mouse["name"] . '</h6>' .
            "<img src='" . $mouse["image"] . "'>" .
            '<p>Brand: ' . $mouse["brand"] . '<p>';
        if (!empty($mouse['weight'])) {
            $echo .= '<p>Weight: ' . $mouse["weight"] . 'g<p>';
        }
        $echo .= '</div>';
    }
    return $echo;
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

