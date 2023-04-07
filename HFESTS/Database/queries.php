  <?php
  include_once 'config.php';

  if ($_GET['Q'] == 6) {
    $title = "All Facilities";
  } else if ($_GET['Q'] == 7) {
    $title = "All Employees working in Facility Saint Mary's Hospital";
    $columns = array('FirstName', 'LastName', 'DOB', 'MedicareCardNumber', 'TelephoneNumber', 'Address', 'City',  'Province', 'PostalCode', 'Citizenship', 'EmailAddress', 'StartDate');
    $query = "SELECT E.FirstName, E.LastName, E.DateOfBirth, E.MedicareCardNumber, E.TelephoneNumber, E.Address, E.City, E.Province, E.PostalCode, E.Citizenship, E.EmailAddress, S.StartDate FROM Employees_Managers as E INNER JOIN Schedule as S ON E.EmployeeID = S.EmployeeID WHERE EndDate IS NULL AND FacilityID = 101 ORDER BY Role ASC,  FirstName ASC, LastName ASC";
  } else if ($_GET['Q'] == 8) {
    $title = "All schedule details of Employee with ID = 3 working from 1PM to 5PM (inclusive)";
    $columns = array('FirstName', 'DayOfTheYear', 'StartTime', 'EndTime');
    $query = "SELECT F.Name as FacilityName, S.StartDate as DayOfTheYear, S.StartTime, S.EndTime FROM Schedule as S INNER JOIN Facility as F ON F.FacilityID = S.FacilityID WHERE S.EmployeeID=3 AND S.StartTime >= '13:00:00' AND S.EndTime <= '17:00:00' ORDER BY F.Name ASC, S.StartDate ASC, S.StartTime ASC";
  
  // } else if ($_GET['Q'] == 12) {
  //   $title = "Total hours scheduled for every role working from 1PM to 5PM (inclusive)";
  //   $columns = array('Role', 'TotalHours');
  //   $query = "SELECT Role, SUM(, S.StartTime, S.EndTime FROM Schedule as S INNER JOIN Facility as F ON F.FacilityID = S.FacilityID WHERE S.EmployeeID=3 AND S.StartTime >= '13:00:00' AND S.EndTime <= '17:00:00' ORDER BY F.Name ASC, S.StartDate ASC, S.StartTime ASC";
  // }
  } else if ($_GET['Q'] == 13) {
    $title = "All facilities' details and number of employees infected by COVID-19 in the past two weeks";
    $columns = array('FacilityName', 'FacilityProvince', 'Capacity', 'InfectionName', 'InfectionDate', 'InfectedByCOVID');
    $query = "SELECT F.Name as FacilityName, F.Province, F.Capacity, I.InfectionName, COUNT(DISTINCT I.EmployeeID) as InfectedByCOVID FROM Facility, Infection, Schedule";
  } else if ($_GET['Q'] == 14) {
    $title = "Number of facilities per doctor in Quebec";
    $columns = array('EmployeeID', 'FirstName', 'LastName', 'City', 'totalNumFacilities');
    $query = "SELECT S.EmployeeID as EmployeeID, E.FirstName as FirstName, E.LastName as LastName, E.City as City, COUNT(DISTINCT S.FacilityID) as totalNumFacilities FROM Employees_Managers, Schedule INNER JOIN Employees_Managers ON E.EmployeeID = S.EmployeeID WHERE E.Role = 'doctor' AND E.Province = 'Quebec' GROUP BY S.EmployeeID ORDER BY E.City ASC, totalNumFacilities DESC";
  }

  if ($result = mysqli_query($conn, $query)) {
    echo "<h2>{$title}</h2>";
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

  mysqli_close($conn); // closing connection after printing query result
  ?>