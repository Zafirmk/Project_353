  <?php
  include_once 'config.php';

  function getAllEmployees_Managers()
  {
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM Employees_Managers")) {
      echo "<h2>Employees_Managers Table</h2>";

      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'EmployeeID' . "</th>";
      echo "<th>" .  'FirstName' . "</th>";
      echo "<th>" .  'LastName' . "</th>";
      echo "<th>" .  'DateOfBirth' . "</th>";
      echo "<th>" .  'MedicareCardNumber' . "</th>";
      echo "<th>" .  'TelephoneNumber' . "</th>";
      echo "<th>" .  'Address' . "</th>";
      echo "<th>" .  'City' . "</th>";
      echo "<th>" .  'Province' . "</th>";
      echo "<th>" .  'PostalCode' . "</th>";
      echo "<th>" .  'Citizenship' . "</th>";
      echo "<th>" .  'EmailAddress' . "</th>";
      echo "<th>" .  'Role' . "</th>";
      echo "<th>" .  'Is_Manager' . "</th>";
      echo "<th>" .  'DELETE' . "</th>";
      echo "<th>" .  'EDIT' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['EmployeeID'] . "</td>";
        echo "<td>" .  $row['FirstName'] . "</td>";
        echo "<td>" .  $row['LastName'] . "</td>";
        echo "<td>" .  $row['DateOfBirth'] . "</td>";
        echo "<td>" .  $row['MedicareCardNumber'] . "</td>";
        echo "<td>" .  $row['TelephoneNumber'] . "</td>";
        echo "<td>" .  $row['Address'] . "</td>";
        echo "<td>" .  $row['City'] . "</td>";
        echo "<td>" .  $row['Province'] . "</td>";
        echo "<td>" .  $row['PostalCode'] . "</td>";
        echo "<td>" .  $row['Citizenship'] . "</td>";
        echo "<td>" .  $row['EmailAddress'] . "</td>";
        echo "<td>" .  $row['Role'] . "</td>";
        echo "<td>" .  $row['Is_Manager'] . "</td>";
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FN={$row['FirstName']}&LN={$row['LastName']}&DOB={$row['DateOfBirth']}&MCN={$row['MedicareCardNumber']}&Tel={$row['TelephoneNumber']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&CS={$row['Citizenship']}&EA={$row['EmailAddress']}&Role={$row['Role']}&IM={$row['Is_Manager']}&table_name=Employees_Managers'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/edit.php?EID={$row['EmployeeID']}&FN={$row['FirstName']}&LN={$row['LastName']}&DOB={$row['DateOfBirth']}&MCN={$row['MedicareCardNumber']}&Tel={$row['TelephoneNumber']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&CS={$row['Citizenship']}&EA={$row['EmailAddress']}&Role={$row['Role']}&IM={$row['Is_Manager']}&table_name=Employees_Managers'>EDIT</a> </td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }


  // function to get all rows of facility
  function getAllFacility()
  {
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM Facility")) {
      echo "<h2>Facility Table</h2>";

      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'FacilityID' . "</th>";
      echo "<th>" .  'Name' . "</th>";
      echo "<th>" .  'Address' . "</th>";
      echo "<th>" .  'City' . "</th>";
      echo "<th>" .  'Province' . "</th>";
      echo "<th>" .  'PostalCode' . "</th>";
      echo "<th>" .  'PhoneNumber' . "</th>";
      echo "<th>" .  'WebAddress' . "</th>";
      echo "<th>" .  'Type' . "</th>";
      echo "<th>" .  'Capacity' . "</th>";
      echo "<th>" .  'DELETE' . "</th>";
      echo "<th>" .  'EDIT' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['FacilityID'] . "</td>";
        echo "<td>" .  $row['Name'] . "</td>";
        echo "<td>" .  $row['Address'] . "</td>";
        echo "<td>" .  $row['City'] . "</td>";
        echo "<td>" .  $row['Province'] . "</td>";
        echo "<td>" .  $row['PostalCode'] . "</td>";
        echo "<td>" .  $row['PhoneNumber'] . "</td>";
        echo "<td>" .  $row['WebAddress'] . "</td>";
        echo "<td>" .  $row['Type'] . "</td>";
        echo "<td>" .  $row['Capacity'] . "</td>";
        echo "<td><a class='del' href='../Database/delete.php?FID={$row['FacilityID']}&Name={$row['Name']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&PN={$row['PhoneNumber']}&WA={$row['WebAddress']}&Type={$row['Type']}&Cap={$row['Capacity']}&table_name=Facility'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/delete.php?FID={$row['FacilityID']}&Name={$row['Name']}&Add={$row['Address']}&City={$row['City']}&Prov={$row['Province']}&PC={$row['PostalCode']}&PN={$row['PhoneNumber']}&WA={$row['WebAddress']}&Type={$row['Type']}&Cap={$row['Capacity']}&table_name=Facility'>EDIT</a> </td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }


  // function to get all rows of Vaccination
  function getAllVaccination()
  {
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM Vaccination")) {
      echo "<h2>Vaccination Table</h2>";

      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'EmployeeID' . "</th>";
      echo "<th>" .  'FacilityID' . "</th>";
      echo "<th>" .  'VaccineType' . "</th>";
      echo "<th>" .  'DoseNumber' . "</th>";
      echo "<th>" .  'VaccinationDate' . "</th>";
      echo "<th>" .  'DELETE' . "</th>";
      echo "<th>" .  'EDIT' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['EmployeeID'] . "</td>";
        echo "<td>" .  $row['FacilityID'] . "</td>";
        echo "<td>" .  $row['VaccineType'] . "</td>";
        echo "<td>" .  $row['DoseNumber'] . "</td>";
        echo "<td>" .  $row['VaccinationDate'] . "</td>";
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&Type={$row['VaccineType']}&DN={$row['DoseNumber']}&Date={$row['VaccinationDate']}&table_name=Vaccination'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&Type={$row['VaccineType']}&DN={$row['DoseNumber']}&Date={$row['VaccinationDate']}&table_name=Vaccination'>EDIT</a> </td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }

  // function to get all rows of Infection
  function getAllInfection()
  {
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM Infection")) {
      echo "<h2>Infection Table</h2>";

      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'EmployeeID' . "</th>";
      echo "<th>" .  'InfectionName' . "</th>";
      echo "<th>" .  'InfectionType' . "</th>";
      echo "<th>" .  'InfectionDate' . "</th>";
      echo "<th>" .  'DELETE' . "</th>";
      echo "<th>" .  'EDIT' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['EmployeeID'] . "</td>";
        echo "<td>" .  $row['InfectionName'] . "</td>";
        echo "<td>" .  $row['InfectionType'] . "</td>";
        echo "<td>" .  $row['InfectionDate'] . "</td>";
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&Name={$row['InfectionName']}&Type={$row['InfectionType']}&Date={$row['InfectionDate']}&table_name=Infection'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/delete.php?EID={$row['EmployeeID']}&Name={$row['InfectionName']}&Type={$row['InfectionType']}&Date={$row['InfectionDate']}&table_name=Infection'>EDIT</a> </td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }

  // function to get all rows of Schedule
  function getAllSchedule()
  {
    global $conn;

    if ($result = mysqli_query($conn, "SELECT * FROM Schedule")) {
      echo "<h2>Schedule Table</h2>";

      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'EmployeeID' . "</th>";
      echo "<th>" .  'FacilityID' . "</th>";
      echo "<th>" .  'StartDate' . "</th>";
      echo "<th>" .  'EndDate' . "</th>";
      echo "<th>" .  'StartTime' . "</th>";
      echo "<th>" .  'EndTime' . "</th>";
      echo "<th>" .  'DELETE' . "</th>";
      echo "<th>" .  'EDIT' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['EmployeeID'] . "</td>";
        echo "<td>" .  $row['FacilityID'] . "</td>";
        echo "<td>" .  $row['StartDate'] . "</td>";
        echo "<td>" .  $row['EndDate'] . "</td>";
        echo "<td>" .  $row['StartTime'] . "</td>";
        echo "<td>" .  $row['EndTime'] . "</td>";
        echo "<td><a class='del' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&SDate={$row['StartDate']}&EDate={$row['EndDate']}&STime={$row['StartTime']}&ETime={$row['EndTime']}&table_name=Schedule'>DELETE</a> </td>";
        echo "<td><a class='edit' href='../Database/delete.php?EID={$row['EmployeeID']}&FID={$row['FacilityID']}&SDate={$row['StartDate']}&EDate={$row['EndDate']}&STime={$row['StartTime']}&ETime={$row['EndTime']}&table_name=Schedule'>EDIT</a> </td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }
  ?>