<?php
require_once('functions.php');
$db = linkDB();
$mice = getDataFromDB($db);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('HTMLhead.php');
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
        <form class="inputPageForm">
            <label>
                Mouse name:
                <input name="mouseName" type="text" placeholder = "Enter Mouse Name Here" required/>
            </label>
            <label>
                Brand:
                <input name="mouseBrand" type="text" placeholder = "Enter Mouse Brand Here" required/>
            </label>
            <label>
                Weight (g):
                <input required name="mouseWeight" type="text" placeholder = "Enter Mouse Weight Here in (g)rams!"/>
            </label>
            <label>
                Image link (optional):
                <input required name="mouseImage" type="text" placeholder = "Enter Mouse Optional Image Link Here"/>
            </label>
            <label id="wirelessLabel">
                Is it Wireless?
                <div class="wirelessDiv">
                    <input type="radio" name="wirelessInput" value="yes" required>
                    Yes
                    </input>
                    <input type="radio" name="wirelessInput" value="no">
                    No
                    </input>
                </div>
            </label>
            <input type="submit" id="inputPageSubmit" value="Submit">
        </form>
        <div class="inputPageImgDiv">
            <img id="inputPageImg" src="https://www.rocketjumpninja.com/static/images/front-page-tiles/02topmice.jpg">
        </div>
    </div>
</main>
</body>

</html>