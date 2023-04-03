<html>

<head>
  <title>Employees_Managers Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="E_Table.php" style="color: #486ce4;font-weight: bold">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <?php
  $tableName = "Employees_Managers";
  include '../Database/getTable.php';
  ?>

  <form action="./E_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./F_DisplayRow.php">
    <label for="employeeID">Enter Employee ID:</label>
    <input type="text" name="employeeID" placeholder="Enter Employee ID">
    <div>
      <button class="button display">Display Specific Row</button>
    </div>
  </form>
</body>


</html>