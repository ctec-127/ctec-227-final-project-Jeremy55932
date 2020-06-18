<?php 
    session_start();
    require_once "form/profile.form.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
    require_once "inc/head.inc.php";
?>
<body class="profile-update">
<?php
    require_once "inc/header.inc.php";
?>

<div class="profile-update-bg">

<h2>Update Account</h2>

<?php echo (isset($updated) ? $updated : ''); ?>

    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" value="<?php echo (isset($username) ? $username : '');?>" required>
        </div>

        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" value="<?php echo (isset($first_name) ? $first_name : '');?>" required>
        </div>

        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" value="<?php echo (isset($last_name) ? $last_name : '');?>"  required>
        </div>

        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" value="<?php echo (isset($email) ? $email : '');?>"  required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
        <!-- value="<?php echo (isset($password) ? $password : '');?>" -->
        <button type="submit" class="btn btn-primary" value="update">update</button>

    </form>
</div>
<?php
    require_once "inc/footer.inc.php";
?>
    <script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>      

    <script defer src="js/script.js"></script>
</body>
</html>
