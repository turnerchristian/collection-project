<?php
require_once('session.php');
require_once('functions.php');

$db = linkDB();
$mice = getDataFromDB($db);

if (!empty($_POST['mouseName']) && !empty($_POST['mouseBrand']) && !empty($_POST['mouseWeight']) && !empty($_POST['wirelessInput'])) {
    $mouseName = $_POST['mouseName'];
    $mouseBrand = $_POST['mouseBrand'];
    $mouseWeight = $_POST['mouseWeight'];
    if ($_POST['wirelessInput'] == 'yes') {
        $isWireless = 1;
    } else {
        $isWireless = 0;
    }
} else {
    header('Location: http://localhost:1234/collection-project/inputPage.php?error=missing');
    exit;
}
var_dump($mouseName);
var_dump($mouseBrand);

if (validateInfo($_POST['mouseName'], $_POST['mouseBrand'], $_POST['mouseWeight']) !== true) {
    header('Location: http://localhost:1234/collection-project/inputPage.php?error=' . validateInfo($_POST['mouseName'], $_POST['mouseBrand'], $_POST['mouseWeight'], $_POST['wirelessInput']));
    exit;
} else {
    $mouseName = formatName($mouseName);
    $mouseBrand = formatName($mouseBrand);
}
var_dump($mouseName);
var_dump($mouseBrand);

