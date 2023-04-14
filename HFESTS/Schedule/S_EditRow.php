<?php
include_once '../Database/config.php';

if (isset($_POST['submit'])) {
$eid = $_POST['eid'];
$fid = $_POST['fid'];
$sdate = $_POST['sdate'];
$editsdate = $_POST['editsdate'];
$edate = $_POST['edate'];
$stime = $_POST['stime'];
$editstime = $_POST['editstime'];
$etime = $_POST['etime'];
$day = $_POST['day'];

  $sql = "UPDATE Schedule SET EmployeeID = '$eid', FacilityID = '$fid', StartDate = '$editsdate', EndDate = '$edate', StartTime = '$editstime', EndTime = '$etime', Day = '$day' WHERE EmployeeID = '$eid' AND FacilityID = '$fid' AND StartDate = '$sdate' AND StartTime = '$stime'";

  if (mysqli_query($conn, $sql)) {
    header("Location: S_Table.php");
    exit();
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }
}

?>

<head>
  <title>Edit Schedule</title>
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

  <h2>Edit Row in Schedule</h2>

  <div class="form">
    <form class="input" action="" method = "POST">
      <table>
        <tr>
          <td><label for="eid">Employee ID (cannot change)</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER" value="<?php echo $_GET['EID'];?>" readonly></td>
          <td><label for="fid">Facility  (cannot change)</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="INTEGER" value="<?php echo $_GET['FID'];?>" readonly></td>
        </tr>

        <tr>
          <td><label for="editsdate">Start Date</label></td>
          <td><input type="text" id="editsdate" name="editsdate" placeholder="DATE" value="<?php echo $_GET['SDate'];?>"></td>
          <td><label for="edate">End Date</label></td>
          <td><input type="text" id="edate" name="edate" placeholder="DATE" value="<?php echo $_GET['EDate'];?>"></td>
        </tr>

        <tr>
          <td><label for="editstime">Start Time</label></td>
          <td><input type="text" id="editstime" name="editstime" placeholder="TIME" value="<?php echo $_GET['STime'];?>"></td>
          <td><label for="etime">End Time</label></td>
          <td><input type="text" id="etime" name="etime" placeholder="TIME" value="<?php echo $_GET['ETime'];?>"></td>
        </tr>

        <tr>
          <td><label for="day">Day</label></td>
          <td><input type="text" id="day" name="day" placeholder="VARCHAR" value="<?php echo $_GET['Day'];?>"></td>
        </tr>

      </table>
      <p class="info">The combination of Employee ID, Facility ID, Start Date and Start Time MUST BE UNIQUE!</p>
      <input type="submit" name="submit" value="Submit">
      <input type="hidden" name="table_name" value="Schedule" />
      <input type="hidden" name="eid" value="<?php echo $_GET['EID'];?>">
      <input type="hidden" name="fid" value="<?php echo $_GET['FID'];?>">
      <input type="hidden" name="sdate" value="<?php echo $_GET['SDate'];?>">
      <input type="hidden" name="stime" value="<?php echo $_GET['STime'];?>">
    </form>
  </div>
</body>

</html>