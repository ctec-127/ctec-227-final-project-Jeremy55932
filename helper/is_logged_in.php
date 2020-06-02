<?php
session_start();
if (isset($_SESSION['username'])) {
    echo json_encode(["status" => 'yes']);
} else {
    echo json_encode(["status" => 'no']);
}
