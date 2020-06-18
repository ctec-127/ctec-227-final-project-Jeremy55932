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


if(isset($_POST['profile-img'])){

    $sql_img = "SELECT image FROM image WHERE user_id = $user_id";
    $result_img = $db->query($sql_img);

    $name = $_FILES['file']['name'];
    $target_dir = $username . " pic/";

    $target_file = $target_dir . basename($_FILES["file"]["name"]);

    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $extensions_arr = array("jpg","jpeg","png","gif");

    if( in_array($imageFileType,$extensions_arr) ){

            $sql3 = "insert into image(image, user_id) values('".$name."','$user_id')";
            $result3 = $db->query($sql3);
            
            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
            header('location: profile.php');

    }
}
$sql_img = "SELECT image FROM image WHERE user_id = $user_id";
$result_img = $db->query($sql_img);
while ($row_img = $result_img -> fetch_assoc()){
    $image_src = $username . " pic/" . $row_img['image'];
}
