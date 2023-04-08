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
  ?>

  <form action="./S_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./S_DisplayRow.php">
    <label for="employeeID">Enter the Employee ID for which you want to see the schedule:</label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID" id="employeeID">
    <div>
      <button class="button display">Display Specific Row</button>
    </div>
  </form>

</body>

</html>