<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title><?= !isset($_SESSION['username']) ? $_SESSION['username'] . "Video Bookmark Gallery" : "Jeremy's Final Project Video Bookmark Gallery"?></title>
</head>
<body>
<?php
    require_once "inc/header.inc.php";
?>
<div class="main-content">
        <div class="main-content-bg">

            <h2>The video bookmark gallery is where you can save online video's to watch later. To start bookmarking your online video's register for an account or login to your account if you already have one</h2>
        </div>
</div>
    
<?php
    require_once "inc/footer.inc.php";
?>

<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>
</body>
</html>