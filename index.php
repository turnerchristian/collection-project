<?php
$db = new PDO('mysql:host=DB;dbname=collectionproject', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query("SELECT * FROM `computerMice`");
$query = $query->fetchAll();
var_dump($query);

