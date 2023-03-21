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
    <form class="input" action="../Database/edit.php">
      <table>
        <tr>
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" value="<?php echo $_GET['EID'] ?>"></td>
          <td><label for="fname">First Name</label></td>
          <td><input type="text" id="fname" name="firstname" value="<?php echo $_GET['FN'] ?>"></td>
        </tr>

        <tr>
          <td><label for="lname">Last Name</label></td>
          <td><input type="text" id="lname" name="lastname" value="<?php echo $_GET['LN'] ?>"></td>
          <td><label for="dob">Date Of Birth</label></td>
          <td><input type="text" id="dob" name="dob" value="<?php echo $_GET['DOB'] ?>"></td>
        </tr>

        <tr>
          <td><label for="mcn">Medicare Card Number</label></td>
          <td><input type="text" id="mcn" name="mcn" value="<?php echo $_GET['MCN'] ?>"></td>
          <td><label for="tel">Telephone Number</label></td>
          <td><input type="text" id="tel" name="tel" value="<?php echo $_GET['Tel'] ?>"></td>
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
          <td><label for="cs">Citizenship</label></td>
          <td><input type="text" id="cs" name="cs" value="<?php echo $_GET['CS'] ?>"></td>
          <td><label for="ea">Email Address</label></td>
          <td><input type="text" id="ea" name="ea" value="<?php echo $_GET['EA'] ?>"></td>
        </tr>

        <tr>
          <td><label for="role">Role</label></td>
          <td>
            <input type="text" id="role" name="role" value="<?php echo $_GET['Role'] ?>">
          </td>
          <td><label for="im">Is Manager</label></td>
          <td> <input type="text" id="im" name="im" value="<?php echo $_GET['IM'] ?>"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
      <input type="hidden" name="table_name" value="Employees_Managers" />
    </form>
  </div>
</body>

</html>