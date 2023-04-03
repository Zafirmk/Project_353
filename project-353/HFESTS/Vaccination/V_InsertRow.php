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
    <form class="input" action="../Database/insert.php">
      <table>
        <tr>
          <td><label class="required" for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER"></td>
          <td><label class="required" for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="INTEGER"></td>
        </tr>

        <tr>
          <td><label class="required" for="type">Vaccine Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE"></td>
          <td><label class="required" for="dn">Dose Number</label></td>
          <td><input type="text" id="dn" name="dn" placeholder="INTEGER"></td>
        </tr>

        <tr>
          <td><label class="required" for="date">Vaccination Date</label></td>
          <td><input type="text" id="date" name="date" placeholder="DATE"></td>
        </tr>

      </table>

      <p class="info">The combination of Employee ID, Facility ID and Dose Number MUST BE UNIQUE!</p>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Vaccination" />
    </form>
  </div>

</body>

</html>