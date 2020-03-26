<?php
declare(strict_types = 1);

function displayMouseOnPage(array $mice): string
{
    $echo = '';
    foreach ($mice as $mouse) {
        $echo .= '<div class="mouseDiv">' .
            '<h6>' . $mouse["name"] . '</h6>' .
            "<img src='" . $mouse["image"] . "'>" .
            '<p>Brand: ' . $mouse["brand"] . '<p>' .
            '<p>Weight: ' . $mouse["weight"] . 'g<p>';
        if ($mouse['is_wireless'] == 1) {
            $echo .= '<p>Type: Wireless<p>';
        } else {
            $echo .= '<p>Type: Wired<p>';
        }
        $echo .= '</div>';
    }
    return $echo;
}

function linkDB(): PDO
{
    $db = new PDO('mysql:host=DB;dbname=collection.project', 'root', 'password');
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

function checkInputLength(string $mouseName, string $mouseBrand, int $mouseWeight): bool
{
    return ((strlen($mouseName) > 100) || (strlen($mouseBrand) > 50) || ($mouseWeight > 999) || ($mouseWeight < 1));

}

function validateWeight(int $mouseWeight): bool
{
    return (!(filter_var($mouseWeight, FILTER_VALIDATE_INT)));
}

function validateNames(string $mouseName, string $mouseBrand): bool
{
    return ((!(preg_match("/^([a-zA-Z0-9- ]+)$/", $mouseName))) || (!(preg_match("/^([a-zA-Z0-9- ]+)$/", $mouseBrand))));
}



function validateWirelessInput (int $isWireless): bool
{
    return (!(($isWireless === 1) || ($isWireless === 0)));
}


