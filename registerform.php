<?php 
    require_once "form/register.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
    require_once "inc/head.inc.php";
?>
<body class="registerform">
<?php
    require_once "inc/header.inc.php";
?>
<div class="registerform-bg">
    <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
        </div>
    
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name" required>
        </div>
    
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name" required>
        </div>
    
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" required>
        </div>
    
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
        </div>
    
        <button type="submit" class="btn btn-primary" value="register">Register</button>

        <button type="reset" class="btn btn-primary">Reset Form</button>
    </form>
</div>

    <script defer src="js/script.js"></script>
</body>
</html>
