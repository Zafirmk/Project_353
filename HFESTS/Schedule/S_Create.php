<html>

<head>
  <title>Delete Schedule</title>
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
      <button class="dropbtn" style="color: #486ce4;font-weight: bold">Schedule
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="S_Create.php">CREATE</a>
        <a href="S_Delete.php">DELETE</a>
        <a href="S_Query.php">QUERY</a>
      </div>
    </div>
  </div>

  <h2>Insert Row into Schedule</h2>

  <div class="form">
    <form action="/action_page.php">
      <table>
        <tr>
          <td><label for="eid">Employee ID</label></td>
          <td><input type="text" id="eid" name="eid" placeholder="Employee ID"></td>
          <td><label for="fid">Facility ID</label></td>
          <td><input type="text" id="fid" name="fid" placeholder="Facility ID"></td>
        </tr>

        <tr>
          <td><label for="sdate">Start Date</label></td>
          <td><input type="text" id="sdate" name="sdate" placeholder="Start Date"></td>
          <td><label for="edate">End Date</label></td>
          <td><input type="text" id="edate" name="edate" placeholder="End Date"></td>
        </tr>

        <tr>
          <td><label for="stime">Start Time</label></td>
          <td><input type="text" id="stime" name="stime" placeholder="Start Time"></td>
          <td><label for="etime">End Date</label></td>
          <td><input type="text" id="etime" name="etime" placeholder="End Time"></td>
        </tr>

      </table>
      <input type="submit" value="Submit">
    </form>
  </div>

</body>

</html>