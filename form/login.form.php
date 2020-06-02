<?php
    session_start();
    require_once '../db/video_bookmark.php';

    // require_once 'content.form.copy.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = $db->real_escape_string($_POST['username']);
        $password = hash('sha512', $db->real_escape_string($_POST['password']));

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

        $result = $db->query($sql);
        if ($result->num_rows == 1) {

            $row = $result->fetch_assoc();
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['first_name'] = $row['first_name'];
            echo $_SESSION['user_id'];
            header('location: ../login.php');

        } else {
            echo '<p>Please try again</p>';
        }
    }

    ?>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
    <div class="form-group">
    <label for="username">User Name</label>
    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
    </div>

    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password">
    </div>

    <div class="form-check mb-2 mr-sm-2">
    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
    <label class="form-check-label" for="inlineFormCheck">Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary" value="login">Login</button>
    </form>
    <script src="js/script.js"></script>

