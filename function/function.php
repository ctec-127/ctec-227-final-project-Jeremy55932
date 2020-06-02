<?php
require_once './form/url.form.php';
require_once '.\db/video_bookmark.php';
$result = [];
if (!isset($_SESSION['username'])) {
    $user = "guest";
} else {
    $user = $_SESSION['username'];
}
function display_video($result) {
    $sql = 'SELECT category.category_name, website.website_url,website.video_name FROM category INNER JOIN website ON category.user_id=website.user_id';
    
    $result = $db->query($sql);

    echo '<div class="table-responsive">';
    echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered table-dark\">";
    while ($row = $result->fetch_assoc()){
        // print_r ($result);
        echo '<tr>';
        echo "<td>{$row['category_name']}</td>";
        echo "<td class=\"text-center\"><strong>{$row['website_url']}</strong></td>";
        echo "<td class=\"text-center\"><strong>{$row['video_name']}</strong></td>";
        echo '</tr>';
    }
        echo '</table>';
        echo '</div>';
    }
// }}
function user_id($user_id){
    if (!isset($_SESSION['user_id'])) {
        $user_id = "0";
        $sql = $db->$user_id;
        echo $user_id;

    } else {
        $user_id = $_SESSION['user_id'];
        $sql = $db->$user_id;
        echo $user_id;

    }
    // $sql = 'SELECT user_id FROM user';

    $db->query($sql);
    echo $db;
}

// function log_page($db,$page_name){
// 	if(!isset($_SESSION['id'])){
// 		$user_id = "0";
// 	} else {
// 		$user_id = $_SESSION['id'];
// 	}
// 	$sql = "INSERT INTO logs (user_id,page_name) VALUES ('$user_id','$page_name')";
// 	$result = $db->query($sql);
// }