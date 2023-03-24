<html>

<head>
  <title>Insert Infection</title>
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
          <td><label class="required" for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER"></td>
          <td><label class="required" for="name">Infection Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label class="required" for="type">Infection Type</label></td>
          <td><input type="text" id="type" name="type" placeholder="VARIABLE"></td>
          <td><label class="required" for="date">Infection Date</label></td>
          <td><input type="text" id="date" name="date" placeholder="DATE"></td>
        </tr>

      </table>
      <p class="info">The combination of Employee ID and Infection Date MUST BE UNIQUE!</p>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Infection" />
    </form>
  </div>
</body>

</html>