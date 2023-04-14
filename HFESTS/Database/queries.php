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
  } else if($_GET['Q'] == 9){
    $title = "Doctors Infected";
    $columns = array("FirstName", "LastName", "InfectionDate", "FacilityName");
    $query = "SELECT e.FirstName, e.LastName, i.InfectionDate, f.Name as FacilityName FROM Employees_Managers e JOIN Schedule s ON s.EmployeeID = e.EmployeeID JOIN Facility f ON f.FacilityID = s.FacilityID JOIN Infection i ON i.EmployeeID = e.EmployeeID WHERE e.Role = 'doctor' AND i.InfectionType = 'COVID-19' AND i.InfectionDate BETWEEN DATE_SUB(NOW(), INTERVAL 2 WEEK) AND NOW() ORDER BY f.Name ASC, e.FirstName ASC;";
  } else if($_GET['Q'] == 11){
    $title = "Doctors and Nurses on Schedule";
    $columns = array("First Name", "Last Name", "Role");
    $query = "SELECT e.FirstName, e.LastName, e.Role FROM Employees_Managers e JOIN Schedule s ON e.EmployeeID = s.EmployeeID WHERE s.FacilityID = [facility_id] AND s.StartDate BETWEEN DATE_SUB(NOW(), INTERVAL 2 WEEK) AND NOW() AND (e.Role = 'Doctor' OR e.Role = 'Nurse') ORDER BY e.Role ASC, e.FirstName ASC;";
  } else if($_GET['Q'] == 15){
    $title = "Nurses Working Highest Number of Hours";
    $columns = array("First Name", "Last Name", "Role");
    $query = "SELECT e.FirstName, e.LastName, e.DateOfBirth, e.EmailAddress, e.Is_Manager, MIN(s.StartDate) AS FirstDayOfWorkAsNurse, SUM(TIME_TO_SEC(TIMEDIFF(s.EndTime, s.StartTime))) / 3600 AS TotalScheduledHours FROM Employees_Managers e JOIN Schedule s ON e.EmployeeID = s.EmployeeID WHERE e.Role = 'nurse' AND CURDATE() BETWEEN s.StartDate AND s.EndDate GROUP BY e.EmployeeID ORDER BY TotalScheduledHours DESC LIMIT 1;";
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