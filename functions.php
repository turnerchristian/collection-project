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

function linkDB(): PDO
{
    $db = new PDO('mysql:host=DB;dbname=collectionproject', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getDataFromDB(PDO $db): array
{
    $query = $db->query("SELECT `name`, `brand`, `image`, `weight`, `is_wireless` FROM `computerMice` 
    WHERE (`name` IS NOT NULL AND `brand` IS NOT NULL AND `weight` IS NOT NULL AND `is_wireless` IS NOT NULL);");
    return $query->fetchAll();
}

function formatName(string $name): string
{
    $name = trim($name, " \t\n\r\0\x0B");
    $name = ucwords($name);
    return $name;
}

function validateInfo(string $mouseName,string $mouseBrand,string $mouseWeight): string
{
    if ((strlen($mouseName) > 100) || (strlen($mouseBrand) > 50) || ($mouseWeight > 1000) || ($mouseWeight < 1)) {
        return 'inputLength';
    } elseif (!(filter_var($mouseWeight, FILTER_VALIDATE_INT))) {
        return 'integer';
    } elseif ((!(preg_match("/^([a-zA-Z0-9- ]+)$/", $mouseName))) || (!(preg_match("/^([a-zA-Z0-9- ]+)$/", $mouseBrand)))) {
        return 'invalidName';
    } else {
        return 'true';
    }

}


