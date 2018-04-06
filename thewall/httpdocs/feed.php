<!doctype html>

<?php
include ('../private/the_wall_db_connection.php');
$mysqli = new mysqli(HOST, USER, PASSWORD, DB);
if ($mysqli->connect_errno) {
    echo 'Error code:' . $mysqli->connect_errno;
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="feedstyle.css">
    <title>TheWall - Feed</title>
</head>
    <body>
        <div class="wrapper">
            <div class="topnav">
                <div class="dropdown">
                    <button id="butt1" class="dropbutt">Dropdown<i class="fa fa-caret-down"></i></button>
                    <div id="myDropcontent" class="dropContent show">
                        <a href="#">Profile</a>
                        <a href="upload.php">Upload</a>
                    </div>
                </div>
                <a class="active" href="feed.php">Feed</a>
            </div>
            <div class="feed" onload="loadDoc()">
                <?php
                $query = "SELECT afbeelding FROM post";
                $result = mysqli_query($mysqli, $query) or die ("ERROR LOADING IMAGES");
                while ($row = mysqli_fetch_array($result)) {
                    $zieAfbeelding = $row['afbeelding'];
                    echo '<div class="imgHolder"><img class="imgEnt" src="' . $zieAfbeelding . '"/></div>';
                }
                ?>
            </div>
        </div>
    </body>
    <script src="feedscript.js">

    </script>
</html>