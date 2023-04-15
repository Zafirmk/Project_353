<html>

<head>
  <title>HFESTS Home</title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="topnav">
    <a href="index.php" style="color: #486ce4;font-weight: bold">Home</a>
    <a href="Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="Facility/F_Table.php">Facility</a>
    <a href="Vaccination/V_Table.php">Vaccination</a>
    <a href="Infection/I_Table.php">Infection</a>
    <a href="Schedule/S_Table.php">Schedule</a>
  </div>


  <div style="padding-left:30px;">
    </br>
    </br>
    </br>
    </br>

    <form action="query.php" method="get">
        <label for="facility_name">Enter facility name:</label>
        <input type="text" id="facility_id" name="facility_id">
        <input type="hidden" name="Q" value="11">
        <button type="submit">Submit</button>
    </form>
    <!-- <a href='query.php?Q=6'>All Facilities</a> -->

  </div>

</body>

</html>