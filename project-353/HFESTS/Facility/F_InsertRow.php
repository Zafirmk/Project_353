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
    <form class="input" action="../Database/insert.php">
      <table>
        <tr>
          <td><label class="required" for="fid">Facility ID <b>(UNIQUE)</b></label></td>
          <td><input type="text" id="fid" name="fid" placeholder="INTEGER"></td>
          <td><label class="required" for="name">Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label class="required" for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="VARIABLE"></td>
          <td><label class="required" for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label class="required" for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="VARIABLE"></td>
          <td><label class="required" for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="pn">Phone Number</label></td>
          <td><input type="text" id="pn" name="pn" placeholder="VARIABLE"></td>
          <td><label for="wa">Web Address</label></td>
          <td><input type="text" id="wa" name="wa" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="type">Type</label></td>
          <td>
            <input type="text" id="type" name="type" placeholder="VARIABLE">
          </td>
          <td>
            <label class="required" for="cap">Capacity</label>
          </td>
          <td> <input type="text" id="cap" name="cap" placeholder="INTEGER"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Facility" />
    </form>
  </div>

</body>

</html>