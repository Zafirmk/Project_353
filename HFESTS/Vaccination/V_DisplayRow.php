<?php

include_once '../Database/config.php';

if (isset($_GET['employeeID'])) {
  $employeeID = $_GET['employeeID'];

  //SQL reads '' as '
  $employeeID = str_replace("'", "''", $employeeID);

  //query to display the infection record that the user has requested 
  $query = "SELECT * FROM Is_Vaccinated WHERE EmployeeID = '$employeeID'";
  $result = mysqli_query($conn, $query);

  //checking if the row is available 
  if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Employee ID</th><th>Facility ID</th><th>Vaccine Type</th><th>Dose Number</th><th>Vaccination Date</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr><td>" . $row['EmployeeID'] . "</td><td>" . $row['FacilityID'] . "</td><td>" . $row['VaccineType'] . "</td><td>" . $row['DoseNumber'] . "</td><td>" . $row['VaccinationDate'] . "</td></tr>";
    }
    echo "</table>";
  }
   else {
    //If there is no row with that id and date, then display an error
    echo "The following EmployeeID is not found in the database: EmployeeID=" . $employeeID . "";
  }

  mysqli_close($conn); 
}
?>
