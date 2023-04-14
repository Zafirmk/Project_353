<?php
include_once '../Database/config.php';

if (isset($_POST['submit'])) {
$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$dob = $_POST['dob'];
$tel = $_POST['tel'];
$add = $_POST['add'];
$city = $_POST['city'];
$prov = $_POST['prov'];
$pc = $_POST['pc'];
$cs = $_POST['cs'];
$ea = $_POST['ea'];
$role = $_POST['role'];
$im = $_POST['im'];

  $sql = "UPDATE Employees_Managers SET FirstName = '$fname', LastName = '$lname', DateOfBirth = '$dob', TelephoneNumber = '$tel', Address = '$add', City = '$city', Province = '$prov', PostalCode = '$pc', Citizenship = '$cs', EmailAddress = '$ea', Role = '$role', Is_Manager = '$im' WHERE EmployeeID = '$id'";

  if (mysqli_query($conn, $sql)) {
    header("Location: E_Table.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<html>

<head>
  <title>Edit Employees_Managers</title>
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

  <h2>Edit Row in Employees_Managers</h2>

  <div class="form">
    <form class="input" action="" method="POST">
      <table>
        <tr>
          <td><label for="id">Employee ID (cannot change)</label></td>
          <td><input type="text" id="id" name="id" value="<?php echo $_GET['EID'];?>" readonly></td>
        </tr>
        <tr>
          <td><label for="fname">First Name</label></td>
          <td><input type="text" id="fname" name="fname" placeholder="VARIABLE" value="<?php echo $_GET['FN'];?>"></td>
          <td><label for="lname">Last Name</label></td>
          <td><input type="text" id="lname" name="lname" placeholder="VARIABLE" value="<?php echo $_GET['LN'];?>"></td>
        </tr>

        <tr>
          <td><label for="dob">Date Of Birth</label></td>
          <td><input type="text" id="dob" name="dob" placeholder="DATE" value="<?php echo $_GET['DOB'];?>"></td>
          <td><label for="tel">Telephone Number</label></td>
          <td><input type="text" id="tel" name="tel" placeholder="VARIABLE" value="<?php echo $_GET['Tel'];?>"></td>
        </tr>

        <tr>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="VARIABLE" value="<?php echo $_GET['Add'];?>"></td>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="VARIABLE" value="<?php echo $_GET['City'];?>"></td>
        </tr>

        <tr>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="VARIABLE" value="<?php echo $_GET['Prov'];?>"></td>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="VARIABLE" value="<?php echo $_GET['PC'];?>"></td>
        </tr>

        <tr>
          <td><label for="cs">Citizenship</label></td>
          <td><input type="text" id="cs" name="cs" placeholder="VARIABLE" value="<?php echo $_GET['CS'];?>"></td>
          <td><label for="ea">Email Address</label></td>
          <td><input type="text" id="ea" name="ea" placeholder="VARIABLE" value="<?php echo $_GET['EA'];?>"></td>
        </tr>

        <tr>
          <td><label for="role">Role</label></td>
          <td>
            <input type="text" id="role" name="role" placeholder="VARIABLE" value="<?php echo $_GET['Role'];?>">
          </td>
          <td><label for="im">Is Manager</label>
          </td>
          <td> <input type="text" id="im" name="im" placeholder="0 OR 1" value="<?php echo $_GET['IM'];?>"></td>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td>
            <p class="info">where 1 = manager</p>
          </td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Submit">
      <input type="hidden" name="table_name" value="Employees_Managers" />
    </form>
  </div>
</body>

</html>