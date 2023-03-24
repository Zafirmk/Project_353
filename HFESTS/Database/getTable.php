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
    $columns = array("EmployeeID", "FacilityID", "StartDate", "EndDate", "StartTime", "EndTime");
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
      echo "<tr>";

      for ($i = 0; $i < count($columns); $i++) {
        echo "<td>" .  $row[$i] . "</td>";
      }

      // DELETE/EDIT button
      if ($tableName == "Employees_Managers") {
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FN={$row['FirstName']}&LN={$row['LastName']}&DOB={$row['DateOfBirth']}&MCN={$row['MedicareCardNumber']}&Tel={$row['TelephoneNumber']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&CS={$row['Citizenship']}&EA={$row['EmailAddress']}&Role={$row['Role']}&IM={$row['Is_Manager']}&table_name=Employees_Managers'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?EID={$row['EmployeeID']}&FN={$row['FirstName']}&LN={$row['LastName']}&DOB={$row['DateOfBirth']}&MCN={$row['MedicareCardNumber']}&Tel={$row['TelephoneNumber']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&CS={$row['Citizenship']}&EA={$row['EmailAddress']}&Role={$row['Role']}&IM={$row['Is_Manager']}&table_name=Employees_Managers'>EDIT</a> </td>";
      } else if ($tableName == "Facility") {
        echo "<td><a class='del' href='../Database/delete.php?FID={$row['FacilityID']}&Name={$row['Name']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&PN={$row['PhoneNumber']}&WA={$row['WebAddress']}&Type={$row['Type']}&Cap={$row['Capacity']}&table_name=Facility'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?FID={$row['FacilityID']}&Name={$row['Name']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&PN={$row['PhoneNumber']}&WA={$row['WebAddress']}&Type={$row['Type']}&Cap={$row['Capacity']}&table_name=Facility'>EDIT</a> </td>";
      } else if ($tableName == 'Vaccination') {
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&Type={$row['VaccineType']}&DN={$row['DoseNumber']}&Date={$row['VaccinationDate']}&table_name=Vaccination'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&Type={$row['VaccineType']}&DN={$row['DoseNumber']}&Date={$row['VaccinationDate']}&table_name=Vaccination'>EDIT</a> </td>";
      } else if ($tableName == "Infection") {
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&Name={$row['InfectionName']}&Type={$row['InfectionType']}&Date={$row['InfectionDate']}&table_name=Infection'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?EID={$row['EmployeeID']}&Name={$row['InfectionName']}&Type={$row['InfectionType']}&Date={$row['InfectionDate']}&table_name=Infection'>EDIT</a> </td>";
      } else {
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&SDate={$row['StartDate']}&EDate={$row['EndDate']}&STime={$row['StartTime']}&ETime={$row['EndTime']}&table_name=Schedule'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&SDate={$row['StartDate']}&EDate={$row['EndDate']}&STime={$row['StartTime']}&ETime={$row['EndTime']}&table_name=Schedule'>EDIT</a> </td>";
      }

      echo "</tr>";
    }
    echo "</table>";

    echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
  }
  ?>