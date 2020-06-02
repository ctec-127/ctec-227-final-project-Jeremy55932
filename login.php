<?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Jeremy's Final Project Video Bookmark Gallery</title>
</head>
<body>
    <?php
    require_once "inc/header.inc.php";
    ?>
    <h2>Your URL's must be direct video links to watch video in current browser</h2>
    <?php
    // require_once 'function/function.php';
    require_once 'function/display.php';
    // require_once "form/url.form.php";
    // display_video($result);
    // user_id($user_id);
?>
</body>
</html>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>