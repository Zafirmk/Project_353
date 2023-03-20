<html>

<head>
  <title>Delete Vaccination</title>
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
      <button class="dropbtn" style="color: #486ce4;font-weight: bold">Vaccination
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="V_Create.php">CREATE</a>
        <a href="V_Delete.php">DELETE</a>
        <a href="V_Query.php">QUERY</a>
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

  <?php
  include '../Database/getTable.php';
  getAllVaccination();
  ?>

</body>

</html>