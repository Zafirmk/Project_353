<html>

<head>
  <title>Facility Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php" style="color: #486ce4;font-weight: bold">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <h2>All Employees working in specific facility sorted in ascending order by role, then by first name, then by last name.</h2>

  <?php
  $FID = "";
  ?>

  <form>
    <label for='fname'>Facility ID:</label>
    <input type='text' id='FacilityID' name='FacilityID' value="<?php echo $FID; ?>">
  </form>

  <?php
  include '../Database/queries.php';
  Q7();
  ?>

</body>

</html>