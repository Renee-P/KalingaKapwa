<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>KalingaKapwa Admin - Applications</title>
    <link rel="stylesheet" href="admin - applications.css">
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
            height: 25px;
        }
    </style>
    <?php 
    include('db.php');

    // Fetch data from the volunteers table
    $sql = "SELECT * FROM volunteers";
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
                <tbody>
                    <?php 
                    // Display data from the volunteers table
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['fname']}</td>";
                        echo "<td>{$row['lname']}</td>";
                        echo "<td>{$row['email']}</td>";
                        echo "<td>{$row['phone_no']}</td>";
                        echo "<td>{$row['area']}</td>";
                        echo "<td>
                                <form action='process_application.php' method='post'>
                                    <input type='hidden' name='volunteer_id' value='{$row['id']}'>
                                    <button type='submit' class='check' name='approve' value='Approve' onclick='return confirm(\"Are you sure you want to approve this application?\")'><img src='images/checkbox.png'></button>
                                    <button type='submit' class='ex' name='disapprove' value='Disapprove' onclick='return confirm(\"Are you sure you want to disapprove this application?\")'><img src='images/cancel.png'></button>

                                </form>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        function logout() {
            alert('Logged out');
        }
    </script>
    <script src="./admin.js"></script>
</body>
</html>
