<html>

<head>
  <title>Infection Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="I_Table.php" style="color: #486ce4;font-weight: bold">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <?php
  $tableName = "Infection";
  include '../Database/getTable.php';

  // check if form is submitted
  if(isset($_GET['employeeID']) && isset($_GET['infectionDate'])) {
    // retrieve the specific row
    $employeeID = $_GET['employeeID'];
    $infectionDate = $_GET['infectionDate'];
    $sql = "SELECT * FROM $tableName WHERE EmployeeID = $employeeID AND InfectionDate = '$infectionDate'";
    $result = mysqli_query($conn, $sql);

    // display the row in a table
    if(mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr><th>Employee ID</th><th>Infection Name</th><th>Infection Type</th><th>Infection Date</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['EmployeeID']."</td><td>".$row['InfectionName']."</td><td>".$row['InfectionType']."</td><td>".$row['InfectionDate']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }
  ?>

  <form action="./I_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./I_DisplayRow.php">
    <label for="employeeID">Enter the Employee ID and Infection Date:</label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID" id="employeeID">
    <input type="text" name="infectionDate" placeholder="Enter Infection Date (YYYY-MM-DD)" id="InfectionDate">
    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Infection" />
  </form>

</body>

</html>