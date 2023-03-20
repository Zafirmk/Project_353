<html>

<head>
  <title>Delete Facility</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>

    <div class="dropdown">
      <button class="dropbtn">Employees_Managers
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="../Employees_Managers/E_Create.php">CREATE</a>
        <a href="../Employees_Managers/E_Delete.php">DELETE</a>
        <a href="../Employees_Managers/E_Query.php">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn" style="color: #486ce4;font-weight: bold">Facility
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="F_Create.php">CREATE</a>
        <a href="F_Delete.php">DELETE</a>
        <a href="F_Query.php">QUERY</a>
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

  <h2>Insert Row into Facility</h2>

  <div class="form">
    <form action="/action_page.php">
      <table>
        <tr>
          <td><label for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="Facility ID"></td>
          <td><label for="name">Name</label></td>
          <td><input type="text" id="name" name="name" placeholder="Name"></td>
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
          <td><label for="pn">Phone Number</label></td>
          <td><input type="text" id="pn" name="pn" placeholder="Phone Numbe"></td>
          <td><label for="wa">Web Address</label></td>
          <td><input type="text" id="wa" name="wa" placeholder="Web Address"></td>
        </tr>

        <tr>
          <td><label for="type">Type</label></td>
          <td>
            <input type="text" id="type" name="type" placeholder="Type">
          </td>
          <td><label for="cap">Capacity</label></td>
          <td> <input type="text" id="cap" name="cap" placeholder="Capacity"></td>
        </tr>
      </table>
      <input type="submit" value="Submit">
    </form>
  </div>

</body>

</html>