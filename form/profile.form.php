<?php
    require_once 'db/video_bookmark.php';

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = false;
    }

    $sql = "SELECT * FROM user WHERE user_id = {$_SESSION['user_id']}";
    $result = $db->query($sql);

    while($row = $result->fetch_assoc()) {
        $username = $row['username'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $email = $row['email'];
        $password = $row['password'];
    }



    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $db->real_escape_string($_POST['username']);
    
        $first_name = $db->real_escape_string($_POST['first_name']);
    
        $last_name = $db->real_escape_string($_POST['last_name']);
    
        $email = $db->real_escape_string($_POST['email']);
    
        $password = hash('sha512', $db->real_escape_string($_POST['password']));
    
    $sql = "UPDATE user SET username='$username', first_name='$first_name', last_name='$last_name', email='$email',password='$password' WHERE user_id=$user_id LIMIT 1";
    
    $result = $db->query($sql);
    
    if ($result == 1) {
        $updated = "<h2>Account was Updated!</h2>";
    } else {
        $updated = "";
    }
    }
