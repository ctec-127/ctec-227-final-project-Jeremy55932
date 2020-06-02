<?php
require_once './form/url.form.php';
require_once '.\db/video_bookmark.php';

    // if(isset($_POST['watched_checked']) && 
    // $_POST['watched_checked'] == 'Yes') 
    // {
    //     echo 0;
    // } else {
    //     echo 1;
    // }

    $sql = 'SELECT category.category_name, website.website_url, website.video_name, website.website_id, website.watched_checked FROM category INNER JOIN website ON category.website_id=website.website_id';

    $result = $db->query($sql);

    echo '<div class="table-responsive">';

    echo "<table class=\"table table-striped table-hover table-sm mt-3 table-bordered table-dark\">";

    while ($row = $result->fetch_assoc()){
        // print_r ($result);

        echo "<td class=\"text-center\">
        <a href=\"delete-url.php?website_id={$row['website_id']}\" onclick=\"return confirm('Are you sure?');\" class=\"text-info\">Delete</a><br>
        <strong>{$row['category_name']}</strong><br>
        <strong>{$row['video_name']}</strong><br>
        <video width=\"400\" height=\"300\" controls>
        <source src=\"{$row['website_url']}\" type=\"video/mp4\">
        </video><br>
        <a href=\"{$row['website_url']}\">Link to Video</a><br>
        <input type=\"checkbox\" id=\"{$row['watched_checked']}\" name=\"watched\" value=\"{$row['watched_checked']}\">
        <label for=\"{$row['watched_checked']}\" class=\"watched\">Watched</label><br>

        </td>";
    }
        echo '</table>';
        echo '</div>';

