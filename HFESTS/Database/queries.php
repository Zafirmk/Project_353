  <?php
  include_once 'config.php';

  function Q6()
  {
    global $conn;
  }

  function Q7()
  {
    global $conn;

    if (isset($_GET['FacilityID'])) {
      $query = "SELECT E.FirstName, E.LastName, E.DateOfBirth, E.MedicareCardNumber, E.TelephoneNumber, E.Address, E.City, E.Province, E.PostalCode, E.Citizenship, E.EmailAddress, S.StartDate FROM Employees_Managers as E INNER JOIN Schedule as S ON E.EmployeeID = S.EmployeeID WHERE EndDate IS NULL AND FacilityID = {$_GET['FacilityID']} ORDER BY Role ASC,  FirstName ASC, LastName ASC;";

      if ($result = mysqli_query($conn, $query)) {
        echo "<table class='gridTable'><tr>";
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
        echo "<th>" .  'StartDate' . "</th>";
        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
          echo "<tr>";

          for ($i = 0; $i < 12; $i++) {
            echo "<td>" .  $row[$i] . "</td>";
          }
          echo "</tr>";
        }
        echo "</table>";
        echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
      } else {
        echo "<script type='text/javascript'>alert('ERROR: Invalid type for Facility ID');";
        echo "</script>";
      }
    }
  }

  function Q8()
  {
    global $conn;
  }

  ?>