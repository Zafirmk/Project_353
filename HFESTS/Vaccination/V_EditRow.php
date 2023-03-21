<html>

<head>
  <title>Insert Vaccination</title>
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

  <h2>Insert Row into Vaccination</h2>

  <div class="form">
    <form class="input" action="../Database/edit.php">
      <table>
        <tr>
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" value="<?php echo $_GET['EID'] ?>"></td>
          <td><label for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" value="<?php echo $_GET['FID'] ?>"></td>
        </tr>

        <tr>
          <td><label for="type">Vaccine Type</label></td>
          <td><input type="text" id="type" name="type" value="<?php echo $_GET['Type'] ?>"></td>
          <td><label for="dn">Dose Number</label></td>
          <td><input type="text" id="dn" name="dn" value="<?php echo $_GET['DN'] ?>"></td>
        </tr>

        <tr>
          <td><label for="date">Vaccination Date</label></td>
          <td><input type="text" id="date" name="date" value="<?php echo $_GET['Date'] ?>"></td>
        </tr>

      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Vaccination" />
    </form>
  </div>

</body>

</html>