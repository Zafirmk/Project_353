  <?php
  include_once 'config.php';

  if ($tableName == 'Employees_Managers') {
    $columns = array("EmployeeID", "FirstName", "LastName", "DOB", "MedicareCardNumber", "TelephoneNumber", "Address", "City", "Province", "PostalCode", "Citizenship", "EmailAddress", "Role", "Is_Manager");
  } else if ($tableName == "Facility") {
    $columns = array('FacilityID', 'Name', 'Address', 'City', 'Province', 'PostalCode', 'PhoneNumber', 'WebAddress', 'Type', 'Capacity');
  } else if ($tableName == "Vaccination") {
    $columns = array('EmployeeID', 'FacilityID', 'VaccineType', 'DoseNumber', 'VaccinationDate');
  } else if ($tableName == "Infection") {
    $columns = array("EmployeeID", "InfectionName", "InfectionType", "InfectionDate");
  } else { // aka Schedule table
    $columns = array("EmployeeID", "FacilityID", "StartDate", "EndDate", "StartTime", "EndTime", "Day");
  }

  if ($result = mysqli_query($conn, "SELECT * FROM {$tableName}")) {
    echo "<h2>{$tableName} Table</h2>";
    echo "<table class='gridTable'><tr>";

    foreach ($columns as $value) {
      echo "<th>" .  $value . "</th>";
    }
    echo "<th>" .  'DELETE' . "</th>";
    echo "<th>" .  'EDIT' . "</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_array($result)) {
      echo "<tr>";

      for ($i = 0; $i < count($columns); $i++) {
        echo "<td>" .  $row[$i] . "</td>";
      }

      // DELETE/EDIT button
      if ($tableName == "Employees_Managers") {
        $variablesToPass = "EID=" . urlencode($row[0]) . "&FN=" . urlencode($row[1]) . "&LN=" . urlencode($row[2]) . "&DOB=" . urlencode($row[3]) . "&MCN=" . urlencode($row[4]) . " &Tel=" . urlencode($row[5]) . "&Add=" . urlencode($row[6]) . " &City=" . urlencode($row[7]) . "&Prov=" . urlencode($row[8]) . " &PC=" . urlencode($row[9]) . "&CS=" . urlencode($row[10]) . " &EA=" . urlencode($row[11]) . "&Role=" . urlencode($row[12]) . " &IM=" . urlencode($row[13]);
        echo "<td><a class='del' href='../Database/delete.php?" . $variablesToPass . "&tableName=Employees_Managers'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?" . $variablesToPass . "&tableName=Employees_Managers'>EDIT</a> </td>";
      } else if ($tableName == "Facility") {
        $variablesToPass = "FID=" . urlencode($row[0]) . "&Name=" . urlencode($row[1]) . "&Add=" . urlencode($row[2]) . "&City=" . urlencode($row[3]) . "&Prov=" . urlencode($row[4]) . " &PC=" . urlencode($row[5]) . "&PN=" . urlencode($row[6]) . " &WA=" . urlencode($row[7]) . "&Type=" . urlencode($row[8]) . " &Cap=" . urlencode($row[9]);
        echo "<td><a class='del' href='../Database/delete.php?" . $variablesToPass . "&tableName=Facility'>DELETE</a></td>";
        echo "<td><a class='edit' href='../Database/edit.php?" . $variablesToPass . "&tableName=Facility'>EDIT</a></td>";
      } else if ($tableName == 'Vaccination') {
        $variablesToPass = "EID=" . urlencode($row[0]) . "&FID=" . urlencode($row[1]) . "&Type=" . urlencode($row[2]) . "&DN=" . urlencode($row[3]) . "&Date=" . urlencode($row[4]);
        echo "<td><a class='del' href='../Database/delete.php?" . $variablesToPass . "&tableName=Vaccination'>DELETE</a></td>";
        echo "<td><a class='edit' href='../Database/edit.php?" . $variablesToPass . "&tableName=Vaccination'>EDIT</a></td>";
      } else if ($tableName == "Infection") {
        $variablesToPass = "EID=" . urlencode($row[0]) . "&Name=" . urlencode($row[1]) . "&Type=" . urlencode($row[2]) . "&Date=" . urlencode($row[3]);
        echo "<td><a class='del' href='../Database/delete.php?" . $variablesToPass . "&tableName=Infection'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?" . $variablesToPass . "&tableName=Infection'>EDIT</a> </td>";
      } else { // schedule table
        $variablesToPass = "EID=" . urlencode($row[0]) . "&FID=" . urlencode($row[1]) . "&SDate=" . urlencode($row[2]) . "&EDate=" . urlencode($row[3]) . "&STime=" . urlencode($row[4]) . "&ETime=" . urlencode($row[5]) . "&Day=" . urlencode($row[6]);
        echo "<td><a class='del' href='../Database/delete.php?" . $variablesToPass . "&tableName=Schedule'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?" . $variablesToPass . "&tableName=Schedule'>EDIT</a> </td>";
      }

      echo "</tr>";
    }
    echo "</table>";
    echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
  }

  mysqli_close($conn); // closing connection after printing table
  ?>