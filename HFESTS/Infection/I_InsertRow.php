<html>

<head>
  <title>Delete Infection</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="../Facility/F_Table.php">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="I_Table.php" style="color: #486ce4;font-weight: bold">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <h2>Insert Row into Infection</h2>

  <div class="form">
    <form class="input" action="../Database/insert.php">
      <table>
        <tr>
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="Employee ID"></td>
          <td><label for="name">Infection Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="Infection Name"></td>
        </tr>

        <tr>
          <td><label for="type">Infection Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="Infection Type"></td>
          <td><label for="date">Infection Date</label></td>
          <td><input type="text" id="date" name="date" placeholder="Infection Date"></td>
        </tr>

      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Infection" />
    </form>
  </div>
</body>

</html>