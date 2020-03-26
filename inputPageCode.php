<?php
require_once('functions.php');
require_once('session.php');

$db = linkDB();
$mice = getDataFromDB($db);

if (!empty($_POST['mouseName']) &&
    !empty($_POST['mouseBrand']) &&
    !empty($_POST['mouseWeight']) &&
    ((($_POST['wirelessInput']) == 1) || (($_POST['wirelessInput']) == 0))) {
    $mouseName = $_POST['mouseName'];
    $mouseBrand = $_POST['mouseBrand'];
    $mouseWeight = (int)$_POST['mouseWeight'];
    if (is_bool($_POST['wirelessInput'])) {
        header('Location: ./inputPage.php?error=inputLength');
        exit;
    } else {
        $isWireless = $_POST['wirelessInput'];
    }
    $mouseName = formatName($mouseName);
    $mouseBrand = formatName($mouseBrand);
} else {
    header('Location: ./inputPage.php?error=missing');
    exit;
}

if (checkInputLength($_POST['mouseName'], $_POST['mouseBrand'], $_POST['mouseWeight'])){
    header('Location: ./inputPage.php?error=inputLength');
    exit;
} elseif (validateWeight($mouseWeight)) {
    header('Location: ./inputPage.php?error=integer');
    exit;
} elseif (validateNames($mouseName, $mouseBrand)) {
    header('Location: ./inputPage.php?error=invalidName');
    exit;
} elseif (validateWirelessInput($isWireless)){
    header('Location: ./inputPage.php?error=inputLength');
    exit;
} else {
    $query = $db->prepare("SELECT `name` FROM `computerMice` WHERE `name` = ?");
    $query->execute([$mouseName]);
    $nameCheck = $query->fetch();
    if (!empty($nameCheck)) {
        header('Location: ./inputPage.php?error=exists');
        exit;
    } else {
        $query = $db->prepare("INSERT INTO `computerMice` (`name` ,`brand`, `weight`, `is_wireless`) 
        VALUES (:name, :brand, :weight, :wireless)");
        $query->bindParam(':name', $mouseName);
        $query->bindParam(':brand', $mouseBrand);
        $query->bindParam(':weight', $mouseWeight);
        $query->bindParam(':wireless', $isWireless);
        $result = $query->execute();
    }
    if ($result) {
        $_SESSION['success']['mouseName'] = $mouseName;
        header('Location: ./index.php?success=mouseAdded');
        exit;
    } else {
        header('Location: ./inputPage.php?error=server');
        exit;
    }
}



