  <?php
  include_once 'config.php';

  if ($_GET['Q'] == 6) {
    $title = "All Facilities";
    $columns = array('Name', 'Address', 'City', 'Province', 'Postal Code', 'Phone Number', 'Web Address',  'Type', 'Capacity', 'NumOfCurrentEmployees');
    $query = "SELECT F.Name, F.Address, F.City, F.Province, F.PostalCode, F.PhoneNumber, F.WebAddress, F.Type, F.Capacity, COUNT(S.EmployeeID) as NumOfCurrentEmployees FROM Facility as F INNER JOIN Schedule as S ON F.FacilityID = S.FacilityID INNER JOIN Employees_Managers as E ON E.EmployeeID = S.EmployeeID WHERE S.EndDate IS NULL ORDER BY F.Province ASC, F.City ASC, F.Type ASC, NumOfCurrentEmployees ASC";
  } else if ($_GET['Q'] == 7) {
    $title = "All Employees working in Facility Saint Mary's Hospital";
    $columns = array('FirstName', 'LastName', 'DOB', 'MedicareCardNumber', 'TelephoneNumber', 'Address', 'City',  'Province', 'PostalCode', 'Citizenship', 'EmailAddress', 'StartDate');
    $query = "SELECT E.FirstName, E.LastName, E.DateOfBirth, E.MedicareCardNumber, E.TelephoneNumber, E.Address, E.City, E.Province, E.PostalCode, E.Citizenship, E.EmailAddress, S.StartDate FROM Employees_Managers as E INNER JOIN Schedule as S ON E.EmployeeID = S.EmployeeID WHERE EndDate IS NULL AND FacilityID = 101 ORDER BY Role ASC,  FirstName ASC, LastName ASC";
  } else if ($_GET['Q'] == 8) {
    $title = "All schedule details of Employee with ID = 3 working from 1PM to 5PM (inclusive)";
    $columns = array('FirstName', 'DayOfTheYear', 'StartTime', 'EndTime');
    $query = "SELECT F.Name as FacilityName, S.StartDate as DayOfTheYear, S.StartTime, S.EndTime FROM Schedule as S INNER JOIN Facility as F ON F.FacilityID = S.FacilityID WHERE S.EmployeeID=3 AND S.StartTime >= '13:00:00' AND S.EndTime <= '17:00:00' ORDER BY F.Name ASC, S.StartDate ASC, S.StartTime ASC";
  } else if ($_GET['Q'] == 10) {
    $title = "All Emails sent by West Island CLSC";
    $columns = array('DateOfEmail', 'FacilityName', 'Subject', 'Body');
    $query = "SELECT * FROM Emails WHERE FacilityName = 'West Island CLSC' ORDER BY DateOfEmail;";
  } else if ($_GET['Q'] == 16) {
    $title = "Details of all nurses/doctors who have been infected at least three times";
    $columns = array('FirstName', 'LastName', 'DateOfBirth', 'EmailAddress', 'Role', 'FirstDayOfWork', 'TotalScheduledHours');
    $query = "SELECT DISTINCT E.FirstName, E.LastName, E.DateOfBirth, E.EmailAddress, E.Role, MIN(S.StartDate) AS 'FirstDayOfWork', (SELECT SUM(TIME_TO_SEC(TIMEDIFF(EndTime, StartTime))/3600) FROM Schedule WHERE EmployeeID = E.EmployeeID AND EndDate IS NULL) AS 'TotalScheduledHours' FROM Employees_Managers E INNER JOIN Infection I ON E.EmployeeID = I.EmployeeID INNER JOIN Schedule S ON E.EmployeeID = S.EmployeeID WHERE E.Is_Manager = false AND S.EndDate IS NULL GROUP BY E.EmployeeID, E.FirstName, E.LastName, E.EmailAddress, E.Role HAVING COUNT(I.EmployeeID) >= 3 AND (E.Role = 'nurse' OR E.Role = 'doctor') ORDER BY E.Role, E.FirstName, E.LastName;";
  } else if ($_GET['Q'] == 17) {
    $title = "Details of all nurses/doctors who have never been infected";
    $columns = array('FirstName', 'LastName', 'DateOfBirth', 'EmailAddress', 'Role', 'FirstDayOfWork', 'TotalScheduledHours');
    $query = "SELECT em.FirstName, em.LastName, em.DateOfBirth, em.EmailAddress, em.Role, MIN(s.StartDate) AS FirstDayOfWork, SUM(TIMESTAMPDIFF(HOUR, s.StartTime, s.EndTime)) AS TotalScheduledHours FROM Employees_Managers em INNER JOIN Schedule s ON em.EmployeeID = s.EmployeeID LEFT JOIN Is_Infected ii ON em.EmployeeID = ii.EmployeeID WHERE em.Role IN ('Nurse', 'Doctor') AND s.EndDate IS NULL AND ii.EmployeeID IS NULL GROUP BY em.EmployeeID, em.FirstName, em.LastName, em.Role ORDER BY em.Role, em.FirstName, em.LastName;";
  } else if ($_GET['Q'] == 20) {
    $title = "Log of all emails produced by HFESTS system";
    $columns = array('DateOfEmail', 'FacilityName', 'Subject', 'Body');
    $query = "SELECT * FROM Emails;";
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