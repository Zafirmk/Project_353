  <?php
  include_once 'config.php';

  if ($_GET['Q'] == 6) {
    $title = "All Facilities";
    $columns = array('FacilityID', 'Name', 'Address', 'City', 'Province', 'PostalCode', 'PhoneNumber', 'WebAddress', 'Type', 'Capacity', 'GeneralManagerName', 'NumEmployees');
    $query = "SELECT f.FacilityID AS FacilityID, f.Name, f.Address, f.City, f.Province, f.PostalCode, f.PhoneNumber, f.WebAddress, f.Type, f.Capacity, CONCAT(em.FirstName, ' ', em.LastName) AS GeneralManagerName, COUNT(DISTINCT s.EmployeeID) AS NumEmployees FROM Facility f LEFT JOIN Schedule s ON f.FacilityID = s.FacilityID AND s.EndDate IS NULL LEFT JOIN Employees_Managers em ON s.EmployeeID = em.EmployeeID AND em.Is_Manager = 1 GROUP BY f.FacilityID ORDER BY f.Province ASC, f.City ASC, f.Type ASC, NumEmployees ASC";
  } else if ($_GET['Q'] == 7) {
    $title = "All Employees working in Facility Saint Mary's Hospital";
    $columns = array('FirstName', 'LastName', 'DOB', 'MedicareCardNumber', 'TelephoneNumber', 'Address', 'City',  'Province', 'PostalCode', 'Citizenship', 'EmailAddress', 'StartDate');
    $query = "SELECT E.FirstName, E.LastName, E.DateOfBirth, E.MedicareCardNumber, E.TelephoneNumber, E.Address, E.City, E.Province, E.PostalCode, E.Citizenship, E.EmailAddress, S.StartDate FROM Employees_Managers as E INNER JOIN Schedule as S ON E.EmployeeID = S.EmployeeID WHERE EndDate IS NULL AND FacilityID = 101 ORDER BY Role ASC,  FirstName ASC, LastName ASC";
  } else if ($_GET['Q'] == 8) {
    $title = "All schedule details of Employee with ID = 3 working from 1PM to 5PM (inclusive)";
    $columns = array('FirstName', 'DayOfTheYear', 'StartTime', 'EndTime');
    $query = "SELECT F.Name as FacilityName, S.StartDate as DayOfTheYear, S.StartTime, S.EndTime FROM Schedule as S INNER JOIN Facility as F ON F.FacilityID = S.FacilityID WHERE S.EmployeeID=3 AND S.StartTime >= '13:00:00' AND S.EndTime <= '17:00:00' ORDER BY F.Name ASC, S.StartDate ASC, S.StartTime ASC";
  } else if($_GET['Q'] == 9){
    $title = "Doctors who have been infected by COVID-19 in the past two weeks";
    $columns = array("FirstName", "LastName", "InfectionDate", "FacilityName");
    $query = "SELECT e.FirstName, e.LastName, i.InfectionDate, f.Name as FacilityName FROM Employees_Managers e JOIN Schedule s ON s.EmployeeID = e.EmployeeID JOIN Facility f ON f.FacilityID = s.FacilityID JOIN Infection i ON i.EmployeeID = e.EmployeeID WHERE e.Role = 'doctor' AND i.InfectionType = 'COVID-19' AND i.InfectionDate BETWEEN DATE_SUB(NOW(), INTERVAL 2 WEEK) AND NOW() ORDER BY f.Name ASC, e.FirstName ASC;";
  } else if($_GET['Q'] == 11){
    $title = "Doctors and Nurses on Schedule";
    $columns = array("First Name", "Last Name", "Role");
    $facility_id = mysqli_real_escape_string($conn, $_GET['facility_id']); // retrieve facility ID input
    $query = "SELECT e.FirstName, e.LastName, e.Role FROM Employees_Managers e JOIN Schedule s ON e.EmployeeID = s.EmployeeID WHERE s.FacilityID = {$facility_id} AND s.StartDate BETWEEN DATE_SUB(NOW(), INTERVAL 2 WEEK) AND NOW() AND (e.Role = 'Doctor' OR e.Role = 'Nurse') ORDER BY e.Role ASC, e.FirstName ASC;";
  } else if($_GET['Q'] == 15){
    $title = "Nurses Working Highest Number of Hours";
    $columns = array("First Name", "Last Name", "Role", "EmailAddress");
    $query = "SELECT e.FirstName, e.LastName, e.DateOfBirth, e.EmailAddress, e.Is_Manager, MIN(s.StartDate) AS FirstDayOfWorkAsNurse, SUM(TIME_TO_SEC(TIMEDIFF(s.EndTime, s.StartTime))) / 3600 AS TotalScheduledHours FROM Employees_Managers e JOIN Schedule s ON e.EmployeeID = s.EmployeeID WHERE e.Role = 'nurse' AND CURDATE() BETWEEN s.StartDate AND s.EndDate GROUP BY e.EmployeeID ORDER BY TotalScheduledHours DESC LIMIT 1;";
  } else if ($_GET['Q'] == 10) {
    $title = "All Emails sent by West Island CLSC";
    $columns = array('DateOfEmail', 'FacilityName', 'Subject', 'Body');
    $query = "SELECT * FROM Emails WHERE FacilityName = 'West Island CLSC' ORDER BY DateOfEmail;";
  } else if ($_GET['Q'] == 12) {
    $title = "Total hours scheduled for every role working from 1PM to 5PM (inclusive)";
    $columns = array('FacilityName', 'Role', 'TotalHours');
    $query = "SELECT F.Name as FacilityName, E.Role as Role, SUM(TIMESTAMPDIFF(HOUR, S.StartTime, S.EndTime)) as TotalHours FROM Schedule as S INNER JOIN Employees_Managers as E ON S.EmployeeID = E.EmployeeID INNER JOIN Facility as F ON S.FacilityID = F.FacilityID WHERE S.StartTime >= '13:00:00' AND S.EndTime <= '17:00:00' AND F.FacilityID = 102 GROUP BY E.Role ORDER BY E.Role ASC";
  } else if ($_GET['Q'] == 13) {
    $title = "All facilities details and number of employees infected by COVID-19 in the past two weeks";
    $columns = array('FacilityName', 'Province', 'Capacity', 'InfectedByCOVID');
    $query = "SELECT F.Name as FacilityName, F.Province as Province, F.Capacity as Capacity, COUNT(DISTINCT I.EmployeeID) as InfectedByCOVID FROM Facility as F INNER JOIN Schedule as S ON S.FacilityID = F.FacilityID INNER JOIN Infection as I ON I.EmployeeID = S.EmployeeID WHERE I.InfectionDate BETWEEN DATE_SUB(NOW(), INTERVAL 2 WEEK) AND NOW() GROUP BY F.FacilityID ORDER BY F.Province ASC, InfectedByCOVID ASC";
  } else if ($_GET['Q'] == 14) {
    $title = "Number of facilities per doctor in Quebec";
    $columns = array('EmployeeID', 'FirstName', 'LastName', 'City', 'totalNumFacilities');
    $query = "SELECT E.EmployeeID as EmployeeID, E.FirstName as FirstName, E.LastName as LastName, E.City as City, COUNT(DISTINCT S.FacilityID) as totalNumFacilities FROM Schedule as S INNER JOIN Employees_Managers AS E ON E.EmployeeID = S.EmployeeID INNER JOIN Facility as F ON F.FacilityID = S.FacilityID WHERE E.Role = 'doctor' AND F.Province = 'Quebec' GROUP BY E.EmployeeID ORDER BY E.City ASC, totalNumFacilities DESC";
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
