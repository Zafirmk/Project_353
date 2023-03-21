<html>

<head>
  <title>Employees_Managers Table</title>
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
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="Employee ID"></td>
          <td><label for="fname">First Name</label></td>
          <td><input type="text" id="fname" name="firstname" placeholder="First Name"></td>
        </tr>

        <tr>
          <td><label for="lname">Last Name</label></td>
          <td><input type="text" id="lname" name="lastname" placeholder="Last Name"></td>
          <td><label for="dob">Date Of Birth</label></td>
          <td><input type="text" id="dob" name="dob" placeholder="DOB"></td>
        </tr>

        <tr>
          <td><label for="mcn">Medicare Card Number</label></td>
          <td><input type="text" id="mcn" name="mcn" placeholder="Medicare Card Number"></td>
          <td><label for="tel">Telephone Number</label></td>
          <td><input type="text" id="tel" name="tel" placeholder="Telephone Number"></td>
        </tr>

        <tr>
          <td><label for="add">Address</label></td>
          <td><input type="text" id="add" name="add" placeholder="Address"></td>
          <td><label for="city">City</label></td>
          <td><input type="text" id="city" name="city" placeholder="City"></td>
        </tr>

        <tr>
          <td><label for="prov">Province</label></td>
          <td><input type="text" id="prov" name="prov" placeholder="Province"></td>
          <td><label for="pc">Postal Code</label></td>
          <td><input type="text" id="pc" name="pc" placeholder="Postal Code"></td>
        </tr>

        <tr>
          <td><label for="cs">Citizenship</label></td>
          <td><input type="text" id="cs" name="cs" placeholder="Citizenship"></td>
          <td><label for="ea">Email Address</label></td>
          <td><input type="text" id="ea" name="ea" placeholder="Email Address"></td>
        </tr>

        <tr>
          <td><label for="role">Role</label></td>
          <td>
            <input type="text" id="role" name="role" placeholder="Role">
          </td>
          <td><label for="im">Is Manager</label></td>
          <td> <input type="text" id="im" name="im" placeholder="Is Manager"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>

</html>