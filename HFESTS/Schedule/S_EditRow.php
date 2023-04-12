<html>

<head>
  <title>Edit Schedule Entry</title>
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

  <h2>Edit Row in Schedule</h2>

  <div class="form">
    <form class="input" action="../Database/edit.php" method="POST">
      <table>
        <tr>
          <td><label for="fname">First Name</label></td>
          <td><input type="text" id="fname" name="fname" placeholder="VARIABLE" value="<?php echo $FN;?>"></td>
          <td><label for="lname">Last Name</label></td>
          <td><input type="text" id="lname" name="lname" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="dob">Date Of Birth</label></td>
          <td><input type="text" id="dob" name="dob" placeholder="DATE"></td>
          <td><label for="tel">Telephone Number</label></td>
          <td><input type="text" id="tel" name="tel" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="VARIABLE"></td>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="VARIABLE"></td>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="cs">Citizenship</label></td>
          <td><input type="text" id="cs" name="cs" placeholder="VARIABLE"></td>
          <td><label for="ea">Email Address</label></td>
          <td><input type="text" id="ea" name="ea" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label for="role">Role</label></td>
          <td>
            <input type="text" id="role" name="role" placeholder="VARIABLE">
          </td>
          <td><label for="im">Is Manager</label>
          </td>
          <td> <input type="text" id="im" name="im" placeholder="0 OR 1"></td>
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