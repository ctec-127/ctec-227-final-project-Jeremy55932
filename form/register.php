<?php

require_once 'db/video_bookmark.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

        $username = $db->real_escape_string(ucwords($_POST['username']));

        $first_name = $db->real_escape_string(ucwords($_POST['first_name']));

        $last_name = $db->real_escape_string(ucwords($_POST['last_name']));

        $email = $db->real_escape_string($_POST['email']);

        $password = hash('sha512', $db->real_escape_string($_POST['password']));

    $sql = "INSERT INTO user (username,first_name,last_name,email,password)
            VALUES('$username','$first_name','$last_name','$email','$password')";

    $result = $db->query($sql);

    if (!$result) {
        $reg_msg = "There is already an account with that username/email";
                
    } else {
        $username = $username . " pic/";

        if (mkdir($username, 0777, true)) {
            $reg_msg = "Account Registered!";

        } else {
            $reg_msg = 'There is already an account with that username/email';
        }
    }
}
   