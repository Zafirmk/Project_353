<?php
include_once 'config.php';

if (isset($_GET['employeeID'])) {
  $employeeID = $_GET['employeeID'];

  // Replacing ' with '' since SQL reads '' as '
  $employeeID = str_replace("'", "''", $employeeID);

  // Query the database to fetch the row corresponding to the employeeID
  $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '$employeeID'";
  $result = mysqli_query($conn, $query);

  // Check if row was found
  if (mysqli_num_rows($result) > 0) {
    echo "<table>"; // Display table
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['EmployeeID'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['EmailAddress'] . "</td></tr>";
    }
    echo "</table>";
  } else {
    // If there is no row with that id, then display an error
    echo "EmployeeID " . $employeeID . " not found.";
  }

  mysqli_close($conn); // Close database connection
}
?>
