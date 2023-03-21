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
  include '../Database/getTable.php';
  getAllEmployees_Managers();
  ?>

  <form action="./E_Create.php">
    <button class="button insert">Insert Row</button>
  </form>
</body>

</html>