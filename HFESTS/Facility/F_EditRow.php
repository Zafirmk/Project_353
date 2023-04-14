<?php
include_once '../Database/config.php';

if (isset($_POST['submit'])) {
$fid = $_POST['fid'];
$name = $_POST['name'];
$add = $_POST['add'];
$city = $_POST['city'];
$prov = $_POST['prov'];
$pc = $_POST['pc'];
$pn = $_POST['pn'];
$wa = $_POST['wa'];
$type = $_POST['type'];
$cap = $_POST['cap'];

  $sql = "UPDATE Facility SET Name = '$name', Address = '$add', City = '$city', Province = '$prov', PostalCode = '$pc', PhoneNumber = '$pn', WebAddress = '$wa', Type = '$type', Capacity = '$cap' WHERE FacilityID = '$fid'";

  if (mysqli_query($conn, $sql)) {
    header("Location: F_Table.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<html>

<head>
  <title>Edit Facility</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="F_Table.php" style="color: #486ce4;font-weight: bold">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <h2>Edit Row in Facility</h2>

  <div class="form">
    <form class="input" action="" method="POST">
      <table>
        <tr>
          <td><label for="fid">Facility ID (cannot change)</label></td>
          <td><input type="text" id="fid" name="fid" value="<?php echo $_GET['FID'];?>" readonly></td>
        </tr>
        <tr>
          <td><label for="name">Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="VARIABLE" value="<?php echo $_GET['Name'];?>"></td>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="VARIABLE" value="<?php echo $_GET['Add'];?>"></td>
        </tr>

        <tr>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="VARIABLE" value="<?php echo $_GET['City'];?>"></td>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="VARIABLE" value="<?php echo $_GET['Prov'];?>"></td>
        </tr>

        <tr>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="VARIABLE" value="<?php echo $_GET['PC'];?>"></td>
          <td><label for="pn">Phone Number</label></td>
          <td><input type="text" id="pn" name="pn" placeholder="VARIABLE" value="<?php echo $_GET['PN'];?>"></td>
        </tr>

        <tr>
          <td><label for="wa">Web Address</label></td>
          <td><input type="text" id="wa" name="wa" placeholder="VARIABLE" value="<?php echo $_GET['WA'];?>"></td>
          <td><label for="type">Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE" value="<?php echo $_GET['Type'];?>">
        </tr>
        <td>
          <label for="cap">Capacity</label>
          <td> <input type="text" id="cap" name="cap" placeholder="INTEGER" value="<?php echo $_GET['Cap'];?>"></td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Submit">
      <input type="hidden" name="table_name" value="Facility" />
    </form>
  </div>

</body>

</html>