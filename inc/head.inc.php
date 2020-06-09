
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">

                // if(document.getElementById('watched_id').checked) {
                //     document.getElementById('watched_id').checked = true;
                // }
    // <?php
    //     $watched = $row['watched_id'];
    //     ?>
        const checkbox = document.getElementById('watched_id')

    checkbox.addEventListener('change', (event) => {
    if (event.target.checked) {
        alert('checked');
    } else {
        alert('not checked');
    }
    })


</script>

    <title>Jeremy's Final Project Video Bookmark Gallery</title>
</head>
