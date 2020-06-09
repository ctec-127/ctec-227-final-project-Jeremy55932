<?php

require_once 'db/video_bookmark.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $db->real_escape_string($_POST['username']);

        $first_name = $db->real_escape_string($_POST['first_name']);

        $last_name = $db->real_escape_string($_POST['last_name']);

        $email = $db->real_escape_string($_POST['email']);

        $password = hash('sha512', $db->real_escape_string($_POST['password']));

    // if (!empty($_POST['video-url'])) {
    //     $videoURL = $db->real_escape_string($_POST['video-url']);
    // } else {
    //     array_push($error_bucket,"<p>A video URL is needed.</p>");
    // }

    $sql = "INSERT INTO user (username,first_name,last_name,email,password)
            VALUES('$username','$first_name','$last_name','$email','$password')";

    $result = $db->query($sql);

    if (!$result) {
        echo "<div class=\"register\">There is already an account with that name</div>";
    } else {
        if (mkdir($username, 0777, true)) {
            // $txt = $username . " video.txt";
            // if (fopen($txt,'w')) or die("can't make account"){
                // if (rename($txt . ".txt", $username)) {
                echo "<div class=\"register\">You are now ready to go!</div>";
                echo '<a href="login.form.php" title="Login Page">Login</a>';
        } else {
            echo 'There is already an account with that name';
            die();
        }
    }}
// }}
?>
