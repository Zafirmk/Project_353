<html>

<head>
  <title>Create Employees_Managers</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>

    <div class="dropdown">
      <button class="dropbtn" style="color: #486ce4;font-weight: bold">Employees_Managers
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="E_Create.php">CREATE</a>
        <a href="E_Delete.php">DELETE</a>
        <a href="E_Query.php">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Facility
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../Facility/F_Create.php">CREATE</a>
        <a href="../Facility/F_Delete.php">DELETE</a>
        <a href="../Facility/F_Query.php">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Vaccination
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../Vaccination/V_Create.php">CREATE</a>
        <a href="../Vaccination/V_Delete.php">DELETE</a>
        <a href="../Vaccination/V_Query.php">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Infection
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../Infection/I_Create.php">CREATE</a>
        <a href="../Infection/I_Delete.php">DELETE</a>
        <a href="../Infection/I_Query.php">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Schedule
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../Schedule/S_Create.php">CREATE</a>
        <a href="../Schedule/S_Delete.php">DELETE</a>
        <a href="../Schedule/S_Query.php">QUERY</a>
      </div>
    </div>
  </div>

  <h2>Insert Row into Employees_Managers </h2>

  <div class="form">
    <form action="/action_page.php">
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