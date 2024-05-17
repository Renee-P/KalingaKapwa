<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['volunteer_id'])) {
    $volunteer_id = $_POST['volunteer_id'];

    // SQL to delete the volunteer record
    $sql = "DELETE FROM volunteers_approved WHERE id = '$volunteer_id'";

    if (mysqli_query($conn, $sql)) {
        http_response_code(204); // Success: No Content
        exit();
    } else {
        http_response_code(500); // Server Error
        echo "Error deleting volunteer: " . mysqli_error($conn);
        exit();
    }
} else {
    http_response_code(400); // Bad Request
    echo "Invalid request";
    exit();
}

