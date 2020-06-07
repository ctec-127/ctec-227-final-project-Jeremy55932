<?php 
    require_once "form/login.form.php";
?>

<!DOCTYPE html>
    <html lang="en">
<?php require_once "inc/head.inc.php"; ?>
    <body class="login-form">

    <?php require_once "inc/header.inc.php"; ?>

    <div class="background">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
    
            <button type="submit" class="btn btn-primary" value="login">Login</button>
            <button type="reset" class="btn btn-primary">Reset</button>
    
            <!-- <button type="register" class="btn btn-primary" value="register">Register</button> -->
            
        </form>
    </div>
</body>
    <script src="js/script.js"></script>
    </html>