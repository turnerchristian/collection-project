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
    header('Location: ./inputPage.php?error=missing');
    exit;
}

if (validateInfo($_POST['mouseName'], $_POST['mouseBrand'], $_POST['mouseWeight']) !== 'true') {
    header('Location: ./inputPage.php?error=' . validateInfo($_POST['mouseName'], $_POST['mouseBrand'], $_POST['mouseWeight'], $_POST['wirelessInput']));
    exit;
} else {
    $mouseName = formatName($mouseName);
    $mouseBrand = formatName($mouseBrand);
    $query = $db->prepare("INSERT INTO `computerMice` (`name` ,`brand`, `weight`, `is_wireless`) VALUES (?, ?, ?, ?)");
    $result = $query -> execute([$mouseName, $mouseBrand, $mouseWeight, $isWireless]);
}


