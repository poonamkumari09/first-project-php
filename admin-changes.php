<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['admin_logged_in'])) {
  header("Location: login.php");
  exit();
}

// DB Connection
$conn = new mysqli("localhost", "root", "", "book_db");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Add or Update Booking
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $location = $_POST['location'];
  $arrival = $_POST['arrival'];
  $leaving = $_POST['leaving'];
  $guests = $_POST['guests'];

  if (isset($_POST['booking_id']) && $_POST['booking_id'] !== '') {
    // Update
    $id = $_POST['booking_id'];
    $stmt = $conn->prepare("UPDATE book_form SET name=?, email=?, location=?, arrival=?, leaving=?, guests=? WHERE id=?");
    $stmt->bind_param("sssssssi", $name, $email, $location, $arrival, $leaving, $guests, $id);
  } else {
    // Add
    $stmt = $conn->prepare("INSERT INTO book_form (name, email, location, arrival, leaving, guests) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssi", $name, $email, $location, $arrival, $leaving, $guests);
  }

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
      <h3 id="form-title">Add New Booking</h3>
      <form method="POST" id="booking-form">
        <input type="hidden" name="booking_id" id="booking_id">
        <input type="text" name="name" id="name" placeholder="Name" required>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <input type="text" name="location" id="location" placeholder="Destination" required>
        <input type="date" name="arrival" id="arrival" required>
        <input type="date" name="leaving" id="leaving" required>
        <input type="number" name="guests" id="guests" placeholder="Guests" required>
        <button type="submit" id="submit-button">Add</button>
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
                  <button class="edit-btn"
                    data-id="<?= $row['id'] ?>"
                    data-name="<?= htmlspecialchars($row['name']) ?>"
                    data-email="<?= htmlspecialchars($row['email']) ?>"
                    data-location="<?= htmlspecialchars($row['location']) ?>"
                    data-arrival="<?= $row['arrival'] ?>"
                    data-leaving="<?= $row['leaving'] ?>"
                    data-guests="<?= $row['guests'] ?>"
                  >Edit</button>
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

  <script>
    
    document.querySelectorAll('.edit-btn').forEach(button => {
      button.addEventListener('click', () => {
        document.getElementById('form-title').textContent = 'Update Booking';
        document.getElementById('submit-button').textContent = 'Update';
        document.getElementById('booking_id').value = button.dataset.id;
        document.getElementById('name').value = button.dataset.name;
        document.getElementById('email').value = button.dataset.email;
        document.getElementById('location').value = button.dataset.location;
        document.getElementById('arrival').value = button.dataset.arrival;
        document.getElementById('leaving').value = button.dataset.leaving;
        document.getElementById('guests').value = button.dataset.guests;
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });
    });
  </script>
  <script src="admin-script.js"></script>
</body>
</html>

<?php $conn->close(); ?>
