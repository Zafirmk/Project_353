  <?php
  include_once 'config.php';

  if ($tableName == 'Employees_Managers') {
    $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '" . $_GET['employeeID'] . "'";
    $columns = array("EmployeeID", "FirstName", "LastName", "DOB", "MedicareCardNumber", "TelephoneNumber", "Address", "City", "Province", "PostalCode", "Citizenship", "EmailAddress", "Role", "Is_Manager");
  } else if ($tableName == "Facility") {
    $query = "SELECT * FROM Facility WHERE FacilityID = '" . $_GET['facilityID'] . "'";
    $columns = array('FacilityID', 'Name', 'Address', 'City', 'Province', 'PostalCode', 'PhoneNumber', 'WebAddress', 'Type', 'Capacity');
  } else if ($tableName == "Vaccination") {
    $query = "SELECT * FROM Vaccination WHERE EmployeeID = '" . $_GET['employeeID'] . "' AND FacilityID = '" . $_GET['facilityID'] . "'";
    $columns = array('EmployeeID', 'FacilityID', 'VaccineType', 'DoseNumber', 'VaccinationDate');
  } else if ($tableName == "Infection") {
    $query = "SELECT * FROM Infection WHERE EmployeeID = '" . $_GET['employeeID'] . "' AND InfectionDate = '" . $_GET['infectionDate'] . "'";
    $columns = array("EmployeeID", "InfectionName", "InfectionType", "InfectionDate"); 
  } else if ($tableName == "Schedule") { 
    $query = "SELECT * FROM Schedule WHERE EmployeeID = '" . $_GET['employeeID'] . "'";
    $columns = array("EmployeeID", "FacilityID", "StartDate", "EndDate", "StartTime", "EndTime", "Day");
  }

  if ($result = mysqli_query($conn, $query)) {
    echo "<h2>{$tableName} Table</h2>";
    echo "<table class='gridTable'><tr>";

    foreach ($columns as $value) {
      echo "<th>" .  $value . "</th>";
    }
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";

      for ($i = 0; $i < count($columns); $i++) {
        echo "<td>" .  $row[$i] . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
  }

  mysqli_close($conn); // closing connection after printing table
  ?>