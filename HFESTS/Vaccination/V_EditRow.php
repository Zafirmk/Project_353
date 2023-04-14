<?php
include_once '../Database/config.php';

if (isset($_POST['submit'])) {
$eid = $_POST['eid'];
$fid = $_POST['fid'];
$type = $_POST['type'];
$dn = $_POST['dn'];
$editdn = $_POST['editdn'];
$date = $_POST['date'];

  $sql = "UPDATE Vaccination SET EmployeeID = '$eid', FacilityID = '$fid', VaccineType = '$type', DoseNumber = '$editdn', VaccinationDate = '$date' WHERE EmployeeID = '$eid' AND FacilityID = '$fid' AND DoseNumber = '$dn'";

  if (mysqli_query($conn, $sql)) {
    header("Location: V_Table.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<html>

<head>
  <title>Edit Vaccination</title>
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

  <h2>Edit Row in Vaccination</h2>

  <div class="form">
    <form class="input" action="" method = "POST">
      <table>
        <tr>
          <td><label for="eid">Employee ID (cannot change)</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER" value="<?php echo $_GET['EID'];?>" readonly></td>
          <td><label for="fid">Facility ID (cannot change)</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="INTEGER" value="<?php echo $_GET['FID'];?>" readonly></td>
        </tr>

        <tr>
          <td><label for="type">Vaccine Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE" value="<?php echo $_GET['Type'];?>"></td>
          <td><label for="editdn">Dose Number</label></td>
          <td><input type="text" id="editdn" name="editdn" placeholder="INTEGER" value="<?php echo $_GET['DN'];?>"></td>
        </tr>

        <tr>
          <td><label for="date">Vaccination Date</label></td>
          <td><input type="text" id="date" name="date" placeholder="DATE" value="<?php echo $_GET['Date'];?>"></td>
        </tr>

      </table>

      <p class="info">The combination of Employee ID, Facility ID and Dose Number MUST BE UNIQUE!</p>
      <input type="submit" name="submit" value="Submit">
      <input type="hidden" name="table_name" value="Vaccination" />
      <input type="hidden" name="eid" value="<?php echo $_GET['EID'];?>">
      <input type="hidden" name="fid" value="<?php echo $_GET['FID'];?>">
      <input type="hidden" name="dn" value="<?php echo $_GET['DN'];?>">
    </form>
  </div>

</body>

</html>