
<!DOCTYPE html>
<html>

<head>
  <title>Slot Booking</title>
  <link rel="stylesheet" type="text/css" href="booking.css">
  <script src="script.js"></script>
  <?php
  require("index.php");
  ?>
</head>

<body>
  <h1>Slot Booking</h1>
  <form action="book_slot.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br>

    <label for="slot">Choose a slot:</label>
    <select id="slot" name="slot" required>
      <option value="">Select a slot</option>
      <option value="Slot 1">Slot 1</option>
      <option value="Slot 2">Slot 2</option>
      <option value="Slot 3">Slot 3</option>
    </select><br>

    <input type="submit" value="Book Slot">
  </form>
</body>

</html>