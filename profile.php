<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php require_once "inc/head.inc.php"; 
?>

<body>

<?php
    require_once "inc/header.inc.php";
    require_once "form/profile-img.php";
?>
<div class="profile-content">

    <h2>
        <?= isset($_SESSION['first_name']) ? "Profile <br>" . ucwords($_SESSION['first_name']) : '' ?>
        <?= isset($_SESSION['last_name']) ? ucwords($_SESSION['last_name']) : '' ?>
    </h2>
    <img src='<?php echo $image_src; ?>' alt="profile" width="150" height="150" class="profile-img">
    <form method="POST" action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" enctype='multipart/form-data'>
        <input type="file" name="file"/>
        <input type="submit" value="Upload Profile Picture" name="profile-img">
    </form>

    <h3>Username: <?php echo $username; ?></h3>
    <h3>first_name: <?php echo $first_name; ?></h3>
    <h3>last_name: <?php echo $last_name; ?></h3>
    <h3>email: <?php echo $email; ?></h3>
    <a name="update" id="update" class="btn btn-primary" href="profile-update.php" role="button">Update Account</a>

</div>
<?php
    require_once "inc/footer.inc.php";
?>
<script defer src="js/script.js"></script>
</body>
</html>
