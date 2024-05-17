<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['approve'])) {
        // Approve action: move record to volunteers_approved table
        $volunteer_id = $_POST['volunteer_id'];

        $sql = "SELECT * FROM volunteers WHERE id = $volunteer_id";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        $fname = $row['fname'];
        $lname = $row['lname'];
        $email = $row['email'];
        $phone_no = $row['phone_no'];
        $area = $row['area'];

        $insert_sql = "INSERT INTO volunteers_approved (fname, lname, email, phone_no, area) 
                       VALUES ('$fname', '$lname', '$email', '$phone_no', '$area')";
        mysqli_query($conn, $insert_sql);

        // Delete the record from volunteers table
        $delete_sql = "DELETE FROM volunteers WHERE id = $volunteer_id";
        mysqli_query($conn, $delete_sql);

        // Redirect back to admin_applications.php
        header("Location: admin_applications.php");
        exit();
    } elseif (isset($_POST['disapprove'])) {
        // Disapprove action: delete record from volunteers table
        $volunteer_id = $_POST['volunteer_id'];
        $sql = "DELETE FROM volunteers WHERE id = $volunteer_id";
        mysqli_query($conn, $sql);

        // Redirect back to admin_applications.php
        header("Location: admin_applications.php");
        exit();
    }
}
