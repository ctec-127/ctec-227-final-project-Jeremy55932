<?php
// <!-- get last auto incremented id from database -->
printf ("New Record has id %d.\n", $db->insert_id) . "<br><br>";

// <!-- get last auto incremented id from database -->
printf ("New Record has id %d.\n", mysqli_insert_id($db)) . "<br><br>";

// get current directory
echo getcwd();
