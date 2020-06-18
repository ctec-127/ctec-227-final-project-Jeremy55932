<?php
require_once "db/video_bookmark.php";

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = false;
}

if (isset($_POST['username'])) {
    $username = $_POST['username'];
} else {
    $username = false;
}

if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
} else {
    $first_name = false;
}

if (isset($_POST['last_name'])) {
    $last_name = $_POST['last_name'];
} else {
    $last_name = false;
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    $email = false;
}

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $username = $db->real_escape_string($_POST['username']);

    $first_name = $db->real_escape_string($_POST['first_name']);

    $last_name = $db->real_escape_string($_POST['last_name']);

    $email = $db->real_escape_string($_POST['email']);

    $password = hash('sha512', $db->real_escape_string($_POST['password']));

$sql = "UPDATE user SET username='$username', first_name='$first_name', last_name='$last_name', email='$email',password='$password' WHERE user_id=$user_id";

$result = $db->query($sql);

if ($result == 1) {
    $updated = "<h2>Account was Updated!</h2>";
} else {
    $updated = "";
}


}