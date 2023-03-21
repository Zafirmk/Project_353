<html>

<head>
  <title>Insert Facility</title>
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

  <h2>Insert Row into Facility</h2>

  <div class="form">
    <form class="input" action="../Database/edit.php">
      <table>
        <tr>
          <td><label for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" value="<?php echo $_GET['FID'] ?>"></td>
          <td><label for="name">Name</label></td>
          <td><input type="text" id="name" name="name" value="<?php echo $_GET['Name'] ?>"></td>
        </tr>

        <tr>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" value="<?php echo $_GET['Add'] ?>"></td>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" value="<?php echo $_GET['City'] ?>"></td>
        </tr>

        <tr>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" value="<?php echo $_GET['Prov'] ?>"></td>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" value="<?php echo $_GET['PC'] ?>"></td>
        </tr>

        <tr>
          <td><label for="pn">Phone Number</label></td>
          <td><input type="text" id="pn" name="pn" value="<?php echo $_GET['PN'] ?>"></td>
          <td><label for="wa">Web Address</label></td>
          <td><input type="text" id="wa" name="wa" value="<?php echo $_GET['WA'] ?>"></td>
        </tr>

        <tr>
          <td><label for="type">Type</label></td>
          <td>
            <input type="text" id="type" name="type" value="<?php echo $_GET['Type'] ?>">
          </td>
          <td><label for="cap">Capacity</label></td>
          <td> <input type="text" id="cap" name="cap" value="<?php echo $_GET['Cap'] ?>"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Facility" />
    </form>
  </div>

</body>

</html>