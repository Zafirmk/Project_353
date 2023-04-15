<html>

<head>
  <title>Vaccination Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="V_Table.php" style="color: #486ce4;font-weight: bold">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <?php
  $tableName = "Vaccination";
  include '../Database/getTable.php';

  if(isset($_GET['employeeID']) && isset($_GET['facilityID']) && isset($_GET['DoseNumber'])) {
    // retrieve the specific row
    $employeeID = $_GET['employeeID'];
    $facilityID = $_GET['facilityID'];
    $doseNumber = $_GET['DoseNumber'];
    $sql = "SELECT * FROM $tableName WHERE EmployeeID = $employeeID AND FacilityID = $facilityID AND DoseNumber = '$doseNumber'";
    $result = mysqli_query($conn, $sql);
  
    // display the row in a table
    if(mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr><th>Employee ID</th><th>Facility ID</th><th>Vaccine Type</th><th>Dose Number</th><th>Vaccination Date</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['EmployeeID']."</td><td>".$row['FacilityID']."</td><td>".$row['VaccineType']."</td><td>".$row['DoseNumber']."</td><td>".$row['VaccinationDate']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }
  
  ?>

  <form action="./V_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./V_DisplayRow.php">
    <label for="employeeID">Enter the Employee ID, Facility ID and Dose Number: </label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID" id="employeeID">
    <input type="text" name="facilityID" placeholder="Enter Facility ID" id="facilityID">
    <input type="text" name="DoseNumber" placeholder="Enter the Dose Number" id="DoseNumber">

    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Vaccination" />
  </form>

</body>

</html>