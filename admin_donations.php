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
                <tbody id="donationsTable">
                    <!-- Donation data will be inserted here dynamically from donations.html -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const donationsTable = document.getElementById('donationsTable');
        //     // Fetch data from donations.html and insert into the table
        //     fetch('donations.html')
        //         .then(response => response.text())
        //         .then(data => {
        //             donationsTable.innerHTML = data;
        //         })
        //         .catch(error => console.error('Error fetching data:', error));
        // });

        function logout() {
            alert('Logged out');
        }
    </script>

    <script src="./admin.js"></script>
</body>
</html>

