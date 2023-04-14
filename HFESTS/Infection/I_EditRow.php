<?php
include_once '../Database/config.php';

if (isset($_POST['submit'])) {
  $eid = $_POST['eid'];
  $name = $_POST['name'];
  $type = $_POST['type'];
  $date = $_POST['date'];
  $editdate = $_POST['editdate'];

  $sql = "UPDATE Infection SET EmployeeID = '$eid', InfectionName = '$name', InfectionType = '$type', InfectionDate = '$editdate' WHERE EmployeeID = '$eid' AND InfectionDate = '$date'";

  if (mysqli_query($conn, $sql)) {
    header("Location: I_Table.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<html>

<head>
  <title>Edit Infection</title>
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

  <h2>Edit Row in Infection</h2>

  <div class="form">
    <form class="input" action="" method="POST">
      <table>
        <tr>
        <td><label for="eid">Employee ID (cannot change)</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER" value="<?php echo $_GET['EID'];?>" readonly></td>
          <td><label for="name">Infection Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="VARIABLE" value="<?php echo $_GET['Name'];?>"></td>
        </tr>

        <tr>
          <td><label for="type">Infection Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE" value="<?php echo $_GET['Type'];?>"></td>
          <td><label for="editdate">Infection Date</label></td>
          <td><input type="text" id="editdate" name="editdate" placeholder="DATE" value="<?php echo $_GET['Date'];?>"></td>
        </tr>

      </table>
      <p class="info">The combination of Employee ID and Infection Date MUST BE UNIQUE!</p>
      <input type="submit" name="submit" value="Submit">
      <input type="hidden" name="table_name" value="Infection" />
      <input type="hidden" name="eid" value="<?php echo $_GET['EID'];?>">
      <input type="hidden" name="date" value="<?php echo $_GET['Date'];?>">
    </form>
  </div>
</body>

</html>