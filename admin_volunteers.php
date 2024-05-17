<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>KalingaKapwa Admin - Volunteers</title>
    <link rel="stylesheet" href="admin - volunteers.css">
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
            <h1>Volunteers</h1>
            <table>
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
                <tbody id="volunteersTable">
                    <!-- Volunteer data will be inserted here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const volunteersTable = document.getElementById('volunteersTable');
            // Retrieve accepted volunteer data from localStorage
            const acceptedVolunteers = JSON.parse(localStorage.getItem('acceptedVolunteers')) || [];
            // Display accepted volunteer data in the table
            acceptedVolunteers.forEach(volunteer => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${volunteer.firstName}</td>
                    <td>${volunteer.lastName}</td>
                    <td>${volunteer.email}</td>
                    <td>${volunteer.phone}</td>
                    <td>${volunteer.area}</td>
                    <td><button onclick="deleteRow(this)">🗑️</button></td>
                `;
                volunteersTable.appendChild(row);
            });
        });

        function deleteRow(button) {
            const row = button.closest('tr');
            row.remove();
        }

        function logout() {
            alert('Logged out');
        }
    </script>

    <script src="./admin.js"></script>
</body>
</html>
