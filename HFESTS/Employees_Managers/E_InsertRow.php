<html>

<head>
  <title>Insert Employees_Managers</title>
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

  <h2>Insert Row into Employees_Managers </h2>

  <div class="form">
    <form class="input" action="../Database/insert.php">
      <table>
        <tr>
          <td><label class="required" for="eid">Employee ID <b>(UNIQUE)</b></label></td>
          <td><input type="text" id="eid" name="eid" placeholder="INTEGER"></td>
          <td><label class="required" for="fname">First Name</label></td>
          <td><input type="text" id="fname" name="fname" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label class="required" for="lname">Last Name</label></td>
          <td><input type="text" id="lname" name="lname" placeholder="VARIABLE"></td>
          <td><label class="required" for="dob">Date Of Birth</label></td>
          <td><input type="text" id="dob" name="dob" placeholder="DATE"></td>
        </tr>

        <tr>
          <td><label class="required" for="mcn">Medicare Card Number <b>(UNIQUE)</b></label></td>
          <td><input type="text" id="mcn" name="mcn" placeholder="VARIABLE"></td>
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
          <td><label class="required" for="cs">Citizenship</label></td>
          <td><input type="text" id="cs" name="cs" placeholder="VARIABLE"></td>
          <td><label for="ea">Email Address</label></td>
          <td><input type="text" id="ea" name="ea" placeholder="VARIABLE"></td>
        </tr>

        <tr>
          <td><label class="required" for="role">Role</label></td>
          <td>
            <input type="text" id="role" name="role" placeholder="VARIABLE">
          </td>
          <td><label class="required" for="im">Is Manager</label>
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
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Employees_Managers" />
    </form>
  </div>
</body>

</html>