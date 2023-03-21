  <?php
  include_once 'config.php';

  function Q6()
  {
    global $conn;
    echo "<h2>All Facilities in ascending order by province, then by city, then by type, then by number of employees currently working for the facility</h2>";

    if ($result = mysqli_query($conn, "SELECT * FROM Facility ORDER BY Province ASC, City ASC, Type ASC;")) {
      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'Name' . "</th>";
      echo "<th>" .  'Address' . "</th>";
      echo "<th>" .  'City' . "</th>";
      echo "<th>" .  'Province' . "</th>";
      echo "<th>" .  'PostalCode' . "</th>";
      echo "<th>" .  'PhoneNumber' . "</th>";
      echo "<th>" .  'WebAddress' . "</th>";
      echo "<th>" .  'Type' . "</th>";
      echo "<th>" .  'Capacity' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['Name'] . "</td>";
        echo "<td>" .  $row['Address'] . "</td>";
        echo "<td>" .  $row['City'] . "</td>";
        echo "<td>" .  $row['Province'] . "</td>";
        echo "<td>" .  $row['PostalCode'] . "</td>";
        echo "<td>" .  $row['PhoneNumber'] . "</td>";
        echo "<td>" .  $row['WebAddress'] . "</td>";
        echo "<td>" .  $row['Type'] . "</td>";
        echo "<td>" .  $row['Capacity'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }

  function Q7()
  {
    global $conn;
    echo "<h2>All Employees working in specific facility sorted in ascending order by role, then by first name, then by last name.</h2>";
    echo "<label for='fname'>Facility ID:</label><input type='text' id='FID' name='FID'><br><br>";


    if ($result = mysqli_query($conn, "SELECT * FROM Facility ORDER BY Province ASC, City ASC, Type ASC;")) {
      echo "<table class='gridTable'><tr>";
      echo "<th>" .  'Name' . "</th>";
      echo "<th>" .  'Address' . "</th>";
      echo "<th>" .  'City' . "</th>";
      echo "<th>" .  'Province' . "</th>";
      echo "<th>" .  'PostalCode' . "</th>";
      echo "<th>" .  'PhoneNumber' . "</th>";
      echo "<th>" .  'WebAddress' . "</th>";
      echo "<th>" .  'Type' . "</th>";
      echo "<th>" .  'Capacity' . "</th>";
      echo "</tr>";

      while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" .  $row['Name'] . "</td>";
        echo "<td>" .  $row['Address'] . "</td>";
        echo "<td>" .  $row['City'] . "</td>";
        echo "<td>" .  $row['Province'] . "</td>";
        echo "<td>" .  $row['PostalCode'] . "</td>";
        echo "<td>" .  $row['PhoneNumber'] . "</td>";
        echo "<td>" .  $row['WebAddress'] . "</td>";
        echo "<td>" .  $row['Type'] . "</td>";
        echo "<td>" .  $row['Capacity'] . "</td>";
        echo "</tr>";
      }
      echo "</table>";

      echo "<h5 class='row_amount'>Total of {$result->num_rows} rows</h5>";
    }
  }

  ?>