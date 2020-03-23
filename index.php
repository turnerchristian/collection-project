<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log-in Page!</title>
</head>
<body>
<form action = "code.php" method = "post">
    E-mail: <input type ="email" name="userInputEmail"><br>
    Password: <input type ="password" name="userInputPassword"><br>
    <input type="submit">
</form>
Create Account: <br>
<form action = "createUser.php" method = "post">
    E-mail: <input type ="email" name="userCreateEmail"><br>
    Password: <input type ="password" name="userCreatePassword"><br>
    Re-type Password: <input type ="password" name="userCheckPassword"><br>
    <input type="submit">
</form>

</body>
</html>
<?php
if (!empty($_GET['error'])) {
    echo $_SESSION['error'][$_GET['error']];
}
if (!empty($_GET['success'])) {
    echo $_SESSION['success'][$_GET['success']];
}




$db = new PDO('mysql:host=DB;dbname=collectionproject', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->query("SELECT * FROM `computerMice`");
$query = $query->fetchAll();
var_dump($query);

?>
