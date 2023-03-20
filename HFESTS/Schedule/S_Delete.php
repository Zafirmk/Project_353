<html>

<head>
  <title>Delete Schedule</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a class="active" href="../index.php">Home</a>

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
      <button class="dropbtn">Schedule
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="S_Create.php">CREATE</a>
        <a href="S_Delete.php">DELETE</a>
        <a href="S_Query.php">QUERY</a>
      </div>
    </div>
  </div>

  <?php
  include '../Database/getTable.php';
  getAllSchedule();
  ?>

</body>

</html>