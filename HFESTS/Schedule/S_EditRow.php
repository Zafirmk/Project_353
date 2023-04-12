<?php
include_once '../Database/config.php';
?>

<html>

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
    <form class="input" action="../Database/edit.php">
      <table>
        <tr>
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER" value="<?php echo $_GET['EID'];?>"></td>
          <td><label for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="INTEGER" value="<?php echo $_GET['FID'];?>"></td>
        </tr>

        <tr>
          <td><label for="sdate">Start Date</label></td>
          <td><input type="text" id="sdate" name="sdate" placeholder="DATE" value="<?php echo $_GET['SDate'];?>"></td>
          <td><label for="edate">End Date</label></td>
          <td><input type="text" id="edate" name="edate" placeholder="DATE" value="<?php echo $_GET['EDate'];?>"></td>
        </tr>

        <tr>
          <td><label for="stime">Start Time</label></td>
          <td><input type="text" id="stime" name="stime" placeholder="TIME" value="<?php echo $_GET['STime'];?>"></td>
          <td><label for="etime">End Time</label></td>
          <td><input type="text" id="etime" name="etime" placeholder="TIME" value="<?php echo $_GET['ETime'];?>"></td>
        </tr>

        <tr>
          <td><label for="day">Day</label></td>
          <td><input type="text" id="day" name="day" placeholder="VARCHAR" value="<?php echo $_GET['Day'];?>"></td>
        </tr>

      </table>
      <p class="info">The combination of Employee ID, Facility ID, Start Date and Start Time MUST BE UNIQUE!</p>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Schedule" />
    </form>
  </div>
</body>

</html>