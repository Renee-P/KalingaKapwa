<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>KalingaKapwa Admin - Applications</title>
    <link rel="stylesheet" href="admin - applications.css">
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
            <h1>Applications</h1>
            <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone No.</th>
                        <th>Area</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="applicationsTable">
                    <!-- Application data will be inserted here dynamically -->
                </tbody>
            </table>
        </div>
    </div>
    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const applicationsTable = document.getElementById('applicationsTable');
        //     // Fetch data from applications.html and insert into the table
        //     fetch('applications.html')
        //         .then(response => response.text())
        //         .then(data => {
        //             applicationsTable.innerHTML = data;
        //         })
        //         .catch(error => console.error('Error fetching data:', error));
        // });

        // function removeApplication(button) {
        //     const row = button.closest('tr');
        //     row.remove();
        // }

        // function acceptApplication(button) {
        //     const row = button.closest('tr');
        //     const rowData = Array.from(row.children).map(td => td.textContent);
        //     const [firstName, lastName, email, phone, area] = rowData;
        //     // Transfer data to admin - volunteers
        //     const volunteersTable = document.getElementById('volunteersTable');
        //     const newRow = document.createElement('tr');
        //     newRow.innerHTML = `
        //         <td>${firstName}</td>
        //         <td>${lastName}</td>
        //         <td>${email}</td>
        //         <td>${phone}</td>
        //         <td>${area}</td>
        //         <td><button onclick="deleteRow(this)">🗑️</button></td>
        //     `;
        //     volunteersTable.appendChild(newRow);
        //     // Remove the application row
        //     row.remove();
        // }

        // function rejectApplication(button) {
        //     const row = button.closest('tr');
        //     row.remove();
        // }

        // function deleteRow(button) {
        //     const row = button.closest('tr');
        //     row.remove();
        // }

        function logout() {
            alert('Logged out');
        }
    </script>

    <script src="./admin.js"></script>
</body>
</html>

