<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>KalingaKapwa Admin - Donations</title>
    <link rel="stylesheet" href="admin-donations.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    include('db.php');
    ?>
</head>
<body>
    <header>
        <div class="header">
            <img class="logo" src="images/admin logo.png" width="420px">
        </div>
    </header>
    <div class="container">
        <div class="sidebar">
            <a href="admin_volunteers.php">Volunteers</a>
            <a href="admin_applications.php">Applications</a>
            <a href="admin_donations.php">Donations</a>
            <button class="logout-btn" onclick="logout()">Log Out</button>
        </div>
        <div class="content">
            <h1>Donations</h1>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Area</th>
                        <th>Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Fetch donation data from the database
                    $sql = "SELECT fname, lname, email, phone_no, area, amount FROM donations";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // Output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . htmlspecialchars($row['fname']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['lname']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['phone_no']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['area']) . "</td>";
                            echo "<td>" . htmlspecialchars($row['amount']) . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='6'>No donations found</td></tr>";
                    }

                    // Close the database connection
                    mysqli_close($conn);
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function logout() {
            alert('Logged out');
            // Add your logout logic here
        }
    </script>
    <script src="./admin.js"></script>
</body>
</html>

