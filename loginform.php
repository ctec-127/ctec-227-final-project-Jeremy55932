<?php
    require_once "form/login.form.php";
?>

<!DOCTYPE html>
    <html lang="en">
<?php require_once "inc/head.inc.php"; ?>
    <body class="login-form">

    <?php require_once "inc/header.inc.php";
    // if(basename($_SERVER['PHP_SELF']) == 'advanced-search-record.php') {
    //     $action = 'advanced-search-record.php';
    //     $button = 'Search Record';
    // } else if (basename($_SERVER['PHP_SELF']) == 'update-record.php') {
    //     $action = 'update-record.php';
    //     $button = 'Update Record';
    // } else{
    //     $action = htmlspecialchars($_SERVER['PHP_SELF']);
    //     $button = 'Create Record';

    // }

    ?>
    <div class="background-login">
        <form action="<?php echo $action;?>" method="post">
            <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" placeholder="Username" name="username">
            </div>
    
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
            </div>
    
            <button type="submit" class="btn btn-primary" value="login">Login</button>

            <button type="reset" class="btn btn-primary">Reset Form</button>
        </form>
    </div>
</body>
    <script src="js/script.js"></script>
    </html>