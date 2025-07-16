<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Add Booking
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_booking'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $arrival = $_POST['arrival'];
  $leaving = $_POST['leaving'];
  $guests = $_POST['guests'];

  $stmt = $conn->prepare("INSERT INTO book_form (name, email, location, arrival, leaving, guests) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("sssssi", $name, $email, $location, $arrival, $leaving, $guests);
  $stmt->execute();
  $stmt->close();
}

// Delete Booking
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("DELETE FROM book_form WHERE id = $id");
}

// Fetch bookings
$sql = "SELECT id, name, email, location, arrival, leaving, guests FROM book_form";
$result = $conn->query($sql);
?>




<?php
session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: login.php");
  exit();
}

// Connect to MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Fetch bookings
$sql = "SELECT id, name, email, location, arrival, leaving, guests FROM book_form";
$result = $conn->query($sql);
?>


<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="admin_dashboard_stylesheet.css">
</head>
<body>
  <div class="sidebar">
    <h1>Admin Panel</h1>
    <a href="#">Dashboard</a>
    <a href="#" class="booking_details_on">Booking Details</a>
    <a href="#">Users</a>
    <a href="#">Settings</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="main-content">
    <div class="header">Booking Details</div>

    <div class="form-container">
      <h3>Add New Booking</h3>
      <form method="POST">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="location" placeholder="Destination" required>
        <input type="date" name="arrival" required>
        <input type="date" name="leaving" required>
        <input type="number" name="guests" placeholder="Guests" required>
        <button type="submit" name="add_booking">Add</button>
      </form>
    </div>

    <div class="table-container">
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Destination</th>
            <th>Arrival</th>
            <th>Leaving</th>
            <th>Guests</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?= htmlspecialchars($row['name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['location']) ?></td>
                <td><?= htmlspecialchars($row['arrival']) ?></td>
                <td><?= htmlspecialchars($row['leaving']) ?></td>
                <td><?= htmlspecialchars($row['guests']) ?></td>
                <td>
                  <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this booking?')">
                    <button class="delete-btn">Delete</button>
                  </a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <tr><td colspan="7">No bookings found.</td></tr>
          <?php endif; ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="admin-script.js"></script>
</body>
</html>

<?php $conn->close(); ?>