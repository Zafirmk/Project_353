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

  // check if form is submitted
  if(isset($_GET['employeeID'])) {
    // retrieve the specific row
    $employeeID = $_GET['employeeID'];
    $sql = "SELECT * FROM $tableName WHERE employeeID = $employeeID";
    $result = mysqli_query($conn, $sql);

    // display the row in a table
    if(mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr><th>Employee ID</th><th>Name</th><th>Position</th><th>Manager ID</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['employeeID']."</td><td>".$row['name']."</td><td>".$row['position']."</td><td>".$row['managerID']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }
  ?>

  <form action="./E_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./E_DisplayRow.php">
    <label for="employeeID">Enter Employee ID:</label>
    <input type="text" name="employeeID" placeholder="INTEGER" id="employeeID">
    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Employees_Managers" />
  </form>

  

</body>

</html>
