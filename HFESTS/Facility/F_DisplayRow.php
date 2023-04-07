<?php
include_once '../Database/config.php';

if (isset($_GET['facilityID'])) {
  $facilityID = $_GET['facilityID'];

  //SQL reads '' as '
  $facilityID = str_replace("'", "''", $facilityID);

  //query to display the facility that the user has requested 
  $query = "SELECT * FROM Facility WHERE FacilityID = '$facilityID'";
  $result = mysqli_query($conn, $query);

  //checking if the row is available 
  if (mysqli_num_rows($result) > 0) {
    echo "<table>"; // Display table
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['FacilityID'] . "</td><td>" . $row['Name'] . "</td><td>" . $row['Address'] . ", " . $row['City'] . ", " . $row['Province'] . ", " . $row['PostalCode'] . "</td><td>" . $row['PhoneNumber'] . "</td><td>" . $row['WebAddress'] . "</td><td>" . $row['Type'] . "</td><td>" . $row['Capacity'] . "</td></tr>";
    }
    echo "</table>";
  } else {
    //If there is no row with that id, then display an error
    echo "The following FacilityID is not found in the database: " . $facilityID . ".";
  }

  mysqli_close($conn); 
}
?>
