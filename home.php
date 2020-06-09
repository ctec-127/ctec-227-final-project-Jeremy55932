<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<?php require_once "inc/head.inc.php"; ?>

<body>
        <?php
        require_once "inc/header.inc.php";
        ?>
    <div class="background">
        <h2>Your URL's must be direct video links to watch video in current browser</h2>
        <?php
        // require_once "inc/viewmode.inc.php";
        require_once 'function/function.php';
        display_video($result);
        // require_once 'function/display.php';

        // require_once "form/url.form.php";
        // user_id($user_id);
    ?>
    </div>
</body>
</html>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer src="js/script.js"></script>