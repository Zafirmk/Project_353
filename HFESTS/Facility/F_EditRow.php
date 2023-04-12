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
    <form class="input" action="../Database/edit.php">
      <table>
        <tr>
          <td><label for="name">Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="VARIABLE"></td>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="VARIABLE"></td>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="VARIABLE"></td>
          <td><label for="pn">Phone Number</label></td>
          <td><input type="text" id="pn" name="pn" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="wa">Web Address</label></td>
          <td><input type="text" id="wa" name="wa" placeholder="VARIABLE"></td>
          <td><label for="type">Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE">
        </tr>
        <td>
          <label for="cap">Capacity</label>
          <td> <input type="text" id="cap" name="cap" placeholder="INTEGER"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Facility" />
    </form>
  </div>

</body>

</html>