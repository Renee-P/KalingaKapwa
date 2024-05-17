<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>KalingaKapwa Admin - Volunteers</title>
    <link rel="stylesheet" href="admin - volunteers.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        tbody button {
            border: none;
            background: none;
            cursor: pointer;
            margin: 0;
            padding: 0;
        }

        tbody img{
            width: 15px;
        }
    </style>
    <?php 
    include('db.php');

    // Fetch data from the volunteers_approved table
    $sql = "SELECT * FROM volunteers_approved";
    $result = mysqli_query($conn, $sql);
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
            <h1>Volunteers</h1>
            <table id="volunteersTable">
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Area</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    // Display data from the volunteers_approved table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['fname']}</td>";
                        echo "<td>{$row['lname']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['phone_no']}</td>";
                        echo "<td>{$row['area']}</td>";
                        // Use onclick attribute to call deleteVolunteer function
                        echo "<td><button onclick='deleteVolunteer({$row['id']})'><img src=images/trash.png></button></td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
    // Define deleteVolunteer function
    function deleteVolunteer(volunteerId) {
        if (confirm('Are you sure you want to delete this volunteer record?')) {
            fetch('delete_volunteer.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                },
                // Pass volunteerId as POST data
                body: 'volunteer_id=' + encodeURIComponent(volunteerId),
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                // Reload the page to reflect the updated volunteer list
                location.reload();
            })
            .catch(error => console.error('Error deleting volunteer:', error));
        }
    }

    function logout() {
        alert('Logged out');
    }
    </script>
    <script src="./admin.js"></script>

</body>
</html>
