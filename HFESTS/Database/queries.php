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
  } else if ($_GET['Q'] == 10) {
    $title = "All Emails sent by West Island CLSC";
    $columns = array('DateOfEmail', 'FacilityName', 'Subject', 'Body');
    $query = "SELECT * FROM Emails WHERE FacilityName = 'West Island CLSC' ORDER BY DateOfEmail;";
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