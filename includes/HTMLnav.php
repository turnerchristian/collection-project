<h2>The Mouse Collection</h2>
<div class="navLinks">
    <?php
    $host = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        echo '<a href="inputPage.php">Add a mouse!</a>';
    } else {
        echo '<a href="index.php">Home</a>';
    }
    ?>
</div>