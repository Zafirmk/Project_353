<?php
include_once '../Database/config.php';

if (isset($_GET['employeeID'])) {
  $employeeID = $_GET['employeeID'];

  //SQL reads '' as '
  $employeeID = str_replace("'", "''", $employeeID);

  //query to display the employee that the user has requested 
  $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '$employeeID'";
  $result = mysqli_query($conn, $query);

  //checking if the row is available 
  if (mysqli_num_rows($result) > 0) {
    echo "<table>"; // Display table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['EmployeeID'] . "</td><td>" . $row['FirstName'] . "</td><td>" . $row['LastName'] . "</td><td>" . $row['DateOfBirth'] . "</td><td>" .$row['MedicareCardNumber']. "</td><td>". $row['TelephoneNumber'] ."</td><td>" . $row['Address'] . ", " . $row['City'] . ", " . $row['Province'] . ", " . $row['PostalCode'] . "</td><td>" . $row['EmailAddress'] . "</td><td>" . $row['Role'] . "</td><td>" . ($row['Is_Manager'] ? 'Yes' : 'No') . "</td></tr>";
    }
    echo "</table>";
  } else {
    //If there is no row with that id, then display an error
    echo "The following EmployeeID is not found in the database: " . $employeeID . ".";
  }

  mysqli_close($conn); 
}
?>
