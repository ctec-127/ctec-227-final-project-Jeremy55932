<?php

require_once "/../db/video_bookmark.php";


if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (!empty($_POST['username'])) {
        $username = $db->real_escape_string($_POST['username']);
    } else {
        array_push($error_bucket,"<p>A username is required.</p>");
    }

    if (!empty($_POST['first_name'])) {
        $first_name = $db->real_escape_string($_POST['first_name']);
    } else {
        array_push($error_bucket,"<p>A first name is required.</p>");
    }

    if (!empty($_POST['last_name'])) {
        $last_name = $db->real_escape_string($_POST['last_name']);
    } else {
        array_push($error_bucket,"<p>A last name is required.</p>");
    }

    if (!empty($_POST['email'])) {
        $email = $db->real_escape_string($_POST['email']);
    } else {
        array_push($error_bucket,"<p>An email is required.</p>");
    }

    if (!empty($_POST['password'])) {
        $password = hash('sha512', $db->real_escape_string($_POST['password']));
    } else {
        array_push($error_bucket,"<p>A password is required.</p>");
    }

    // if (!empty($_POST['video-url'])) {
    //     $videoURL = $db->real_escape_string($_POST['video-url']);
    // } else {
    //     array_push($error_bucket,"<p>A video URL is needed.</p>");
    // }

    $sql = "INSERT INTO user (username,first_name,last_name,email,password)
            VALUES('$username','$first_name','$last_name','$email','$password')";

    $result = $db->query($sql);

    if (!$result) {
        echo "<div>There was a problem registering your account</div>";
    } else {
        echo "<div>You are now ready to go!</div>";
        echo '<a href="login.php" title="Login Page">Login</a>';
    }
}
?>