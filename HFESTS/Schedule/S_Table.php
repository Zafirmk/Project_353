<html>

<head>
  <title>Schedule Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="S_Table.php" style="color: #486ce4;font-weight: bold">Schedule</a>
  </div>

  <?php
  $tableName = "Schedule";
  include '../Database/getTable.php';

  if(isset($_GET['employeeID']) && isset($_GET['facilityID']) && isset($_GET['StartDate']) && isset($_GET['StartTime'])) {
    // retrieve the specific row
    $employeeID = $_GET['employeeID'];
    $facilityID = $_GET['facilityID'];
    $startDate = $_GET['StartDate'];
    $startTime = $_GET['StartTime'];
    $sql = "SELECT * FROM $tableName WHERE EmployeeID = $employeeID AND FacilityID = $facilityID AND StartDate = '$startDate' AND StartTime = '$startTime'";
    $result = mysqli_query($conn, $sql);
  
    // display the row in a table
    if(mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr><th>Employee ID</th><th>Facility ID</th><th>Start Date</th><th>Start Time</th><th>End Time</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['EmployeeID']."</td><td>".$row['FacilityID']."</td><td>".$row['StartDate']."</td><td>".$row['StartTime']."</td><td>".$row['EndTime']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }
  
  ?>

  <form action="./S_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./S_DisplayRow.php">
    <label for="employeeID">Enter the Employee ID, Facility ID, Start Date and Start Time</label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID" id="employeeID">
    <input type="text" name="facilityID" placeholder="Enter Facility ID" id="facilityID">
    <input type="text" name="StartDate" placeholder="Enter Start Date" id="StartDate">
    <input type="text" name="StartTime" placeholder="Enter Start Time" id="StartTime">
    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Schedule" />
    <br/>
    <br/>
    <br/>
    <br/>
  </form>

</body>

</html>