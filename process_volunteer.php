<?php
include('db.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $area = $_POST['area'];

    // SQL query to insert data into volunteers table
    $sql = "INSERT INTO volunteers (fname, lname, email, phone_no, area) 
            VALUES ('$fname', '$lname', '$email', '$phone_no', '$area')";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // Send a success message back to the client
        echo "alert('Volunteer application submitted successfully!');";
    } else {
        // Send an error message back to the client
        echo "alert('Error: " . addslashes(mysqli_error($conn)) . "');";
    }
} 
