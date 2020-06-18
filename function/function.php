<?php
require_once 'db/video_bookmark.php';

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
} else {
    $user_id = false;
}


$sql = "SELECT category.category_name, website.website_url, website.video_name, website.website_id, watched.watched_id, user.username, user.user_id, category.user_id, website.user_id 
FROM category 
INNER JOIN website 
ON category.website_id=website.website_id 
INNER JOIN watched 
ON watched.category_id=category.category_id 
INNER JOIN user 
ON user.user_id=category.user_id 
WHERE user.user_id = $user_id";

$result = $db->query($sql);

function display_video1($result) {

    echo '<div class="table-responsive">';

    echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered color\">";

    while ($row = $result->fetch_assoc()) {
        $title = ucwords("{$row['video_name']}");
        $category_name = ucwords("{$row['category_name']}");

        echo "<td class=\"text-center\">
        <a href=\"delete-url.php?website_id={$row['website_id']}\" onclick=\"return confirm('Are you sure?');\" class=\"delete\">Delete</a><br>
        <p class=\"title\"><strong>Title: $title</strong></p><br>
        <p class=\"categoryname\"><strong>Category: $category_name</strong></p><br>
        <video width=\"400\" height=\"300\" controls>
        <source src=\"{$row['website_url']}\" type=\"video/mp4\">
        </video><br>
        <a href=\"{$row['website_url']}\" class=\"url-link\">Link to Video</a><br>

            <input type=\"checkbox\" onclick=\"\" id=\"{$row['watched_id']}\" name=\"watched\" value=\"{$row['watched_id']}\" class=\"watched\" data-avatar=\"<%= user.avatar %>\">
            <label for=\"{$row['watched_id']}\" class=\"watched\" \">Watched</label><br>

        </td>";

    }
        echo '</table>';
        echo '</div>';
    }



    $sql2 = "SELECT category.category_name, website.website_url, website.video_name, website.website_id, watched.watched_id, user.username, user.user_id, category.user_id, website.user_id 
    FROM category 
    INNER JOIN website 
    ON category.website_id=website.website_id 
    INNER JOIN watched 
    ON watched.category_id=category.category_id 
    INNER JOIN user 
    ON user.user_id=category.user_id 
    WHERE user.user_id = $user_id";
    
    $result2 = $db->query($sql2);
    
    function display_video2($result2) {

        echo '<div class="table-responsive">';

        echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered color\">";

        while ($row2 = $result2->fetch_assoc()){
            $title = ucwords("{$row2['video_name']}");
            $category_name = ucwords("{$row2['category_name']}");

            echo "
            <tr class=\"center\">
                <td class=\"text-center\">
                <a href=\"delete-url.php?website_id={$row2['website_id']}\" onclick=\"return confirm('Are you sure?');\" class=\"delete\">Delete</a><br>
                <p class=\"title\"><strong>Title: $title</strong></p><br>
                <p class=\"categoryname\"><strong>Category: $category_name</strong></p><br>
                <video width=\"900\" height=\"300\" controls class=\"viewtwo\">
                <source src=\"{$row2['website_url']}\" type=\"video/mp4\">
                </video><br>
                <a href=\"{$row2['website_url']}\" class=\"url-link\">Link to Video</a><br>
                <form action=\"functon.php\" method=\"post\">
                    <input type=\"checkbox\" onclick=\"\" id=\"{$row2['watched_id']}\" name=\"watched\" value=\"{$row2['watched_id']}\" class=\"watched\" data-avatar=\"<%= user.avatar %>\">
                    <label for=\"{$row2['watched_id']}\" class=\"watched\" id=\"watched\">Watched</label><br>
                </form>
                </td>
            </tr>";

        }
            echo '</table>';
            echo '</div>';
        }