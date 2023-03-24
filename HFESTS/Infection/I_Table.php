<html>

<head>
  <title>Delete Infection</title>
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
  ?>

  <form action="./I_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./F_DisplayRow.php">
    <button class="button display">Display Specific Row</button>
  </form>
</body>

</html>