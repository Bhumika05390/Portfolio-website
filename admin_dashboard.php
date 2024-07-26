<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <h1>Contact Submissions</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td><td>" . $row["message"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No submissions found</td></tr>";
        }
        ?>
    </table>
    <a href="admin_logout.php">Logout</a>
</body>
</html>
<?php
$conn->close();
?>
