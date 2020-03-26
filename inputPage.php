<?php
require_once('session.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Add a mouse</title>
    <?php
    include_once('HTMLhead.php');
    ?>
</head>

<body>
<nav>
    <?php
    require_once('HTMLnav.php');
    ?>
</nav>
<main class="inputPageMain">
    <h2>Add to the Mouse collection!</h2>
    <div class = "inputPageDiv">
        <form class="inputPageForm" action="inputPageCode.php" method="post">
            <label>
                Mouse name:
                <input name="mouseName" type="text" placeholder = "Enter Mouse Name Here" maxlength="100" required/>
            </label>
            <label>
                Brand:
                <input name="mouseBrand" type="text" placeholder = "Enter Mouse Brand Here"maxlength="50" required/>
            </label>
            <label>
                Weight (g):
                <input name="mouseWeight" type="text" pattern="[0-9]*" placeholder= "Range: 1-999 (g)" maxlength="10" required/>
            </label>
            <label id="wirelessLabel">
                Is it Wireless?
                <div class="wirelessDiv">
                    <input type="radio" name="wirelessInput" value="1" required>
                    Yes
                    </input>
                    <input type="radio" name="wirelessInput" value="0">
                    No
                    </input>
                </div>
            </label>
            <input type="submit" id="inputPageSubmit" value="Submit">
            <?php
            if (!empty($_GET['error'])) {
                echo '<p class="error">' . $_SESSION['error'][$_GET['error']]. '</p>';
            }
            ?>
        </form>
        <div class="inputPageImgDiv">
            <img id="inputPageImg" src="https://www.rocketjumpninja.com/static/images/front-page-tiles/02topmice.jpg">
        </div>
    </div>
</main>
</body>

</html>




