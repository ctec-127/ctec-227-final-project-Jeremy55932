<?php
    session_start();
    require_once 'db/video_bookmark.php';

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
            header('location: home.php');

        } else {
            echo '<p>Please try again</p>';
        }
    }
    ?>
