<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $area = $_POST['area'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO donations (fname, lname, email, phone_no, area, amount) 
            VALUES ('$fname', '$lname', '$email', '$phone_no', '$area', '$amount')";

    if (mysqli_query($conn, $sql)) {
        echo "alert('Donation recorded successfully');";
    } else {
        echo "alert('Error: " . addslashes($error) . "');";
    }
}
