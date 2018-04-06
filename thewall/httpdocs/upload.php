<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="uploadstyle.css">
    <title>Upload Image</title>
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
            <div class="upload">
                <div class="imgpreview">
                    <?php
                    //$location = $_GET['location'];
                    //echo '<img src="' . $location . '" />';
                    ?>
                </div>
                <form method="post" action="process_upload.php" enctype="multipart/form-data">
                    <label>
                        <input type="text" id="title" name="title"></label><br>
                    <label>
                        <input type="file" id="file" name="userimage"></label><br>
                    <label>
                        <textarea name="discription" id="txtarea" form="uploadform" rows="4" cols="35"></textarea><br>
                    <input type="submit" id="confirm" name="submit" value="Confirm"><br>
                </form>

            </div>
        </div>
    </body>
    <script src="uploadscript.js"></script>
</html>