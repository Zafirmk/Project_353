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
  include '../Database/getTable.php';
  getAllSchedule();
  ?>

  <form action="./S_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>
</body>

</html>