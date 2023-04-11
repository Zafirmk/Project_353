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
  ?>

  <form action="./V_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./V_Display.php">
    <label for="employeeID">Enter the Employee ID for which you want to see vaccination:</label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID" id="employeeID">
    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Vaccination" />
  </form>

</body>

</html>