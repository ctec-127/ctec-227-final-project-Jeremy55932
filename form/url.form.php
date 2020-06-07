<?php
    require_once 'db/video_bookmark.php';

    $errors = [];

    if($_SERVER['REQUEST_METHOD'] == "POST"){

    $video_name = $db->real_escape_string($_POST['video_name']);

    $website_url = $db->real_escape_string($_POST['website_url']);

    $category_name = $db->real_escape_string($_POST['category_name']);

// if (count($errors) == 0) {
    if (isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
    } else {
        $user_id = 'guest';
    }
    $sql = "INSERT INTO website (website_url,video_name,user_id)
            VALUES('$website_url','$video_name','$user_id')";

    $result = $db->query($sql);
    if (!$result) {
        echo "<div>There was a problem entering your URL.</div>";
    } else {
        // printf ("New Record has id %d.\n", mysqli_insert_id($db));
        $sql2 = "INSERT INTO category (category_name,website_id,user_id)
            VALUES('$category_name','$db->insert_id','$user_id')";
        $result2 = $db->query($sql2);

        $sql3 = "INSERT INTO watched (category_id)
            VALUES('$db->insert_id')";
        $result3 = $db->query($sql3);

        header('location: login.php?message=Video%20 has%20been%20bookmarked.');

        }
        // printf ("New Record has id %d.\n", $db->insert_id);
        // echo "<div>Video has been bookmarked!</div>";
    }


// } else {
//     echo '<p>The following errors were detected:</p>';
//     echo '<div class="pt-4 alert alert-warning" role="alert">';
//         echo '<ul>';
//         foreach ($errors as $text){
//             echo '<li>' . $text . '</li>';
//         }
//         echo '</ul>';
//     echo '</div>';
//     echo '<p>All of these fields are required. Please fill them in.</p>';

// }

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
