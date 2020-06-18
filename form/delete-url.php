<?php
require_once 'db/video_bookmark.php';

if(isset($_GET['website_id'])) {

    $sql = "DELETE website, category, watched
    FROM website, watched
    INNER JOIN category
    WHERE website.website_id = category.website_id AND website.website_id = {$_GET['website_id']} AND category.category_id = watched.category_id";

    $result = $db->query($sql);

    if($db->affected_rows == 0){
        echo '<h1>Cannot Delete</h1>';
    } else {
        header('location: homestart.php?message=I%20 successfully%20deleted%20that%20record%20for%20you.');
    }}