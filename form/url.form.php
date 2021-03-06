<?php
    require_once 'db/video_bookmark.php';

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $video_name = $db->real_escape_string($_POST['video_name']);

    $website_url = $db->real_escape_string($_POST['website_url']);

    $category_name = $db->real_escape_string($_POST['category_name']);

    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = false;
    }
    $sql = "INSERT INTO website (website_url,video_name,user_id)
            VALUES('$website_url','$video_name','$user_id')";

    $result = $db->query($sql);
    if (!$result) {
        echo "<div>There was a problem entering your URL.</div>";
    } else {
        $sql2 = "INSERT INTO category (category_name,website_id,user_id)
            VALUES('$category_name','$db->insert_id','$user_id')";
        $result2 = $db->query($sql2);

        $sql3 = "INSERT INTO watched (category_id)
            VALUES('$db->insert_id')";
        $result3 = $db->query($sql3);

        header('location: homestart.php?message=Video%20 has%20been%20bookmarked.');

        }
    }


?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<div class="form-group">
    <label for="video_name">Video Name</label>
    <input type="text" class="form-control" id="video_name" placeholder="Video Name" name="video_name" required>
    </div>
<div class="form-group">
    <label for="website_url">Paste Video URL</label>
    <input type="text" class="form-control" id="website_url" placeholder="https://something.com" name="website_url" required>
</div>
<div class="form-group">
    <label for="category_name">Video Category</label>
    <input type="text" class="form-control" id="category_name" placeholder="Category" name="category_name" required>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>

<script defer src="js/script.js"></script>
