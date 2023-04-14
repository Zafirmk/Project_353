<html>

<head>
  <title>Facility Table</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <div class="topnav">
    <a href="../index.php">Home</a>
    <a href="../Employees_Managers/E_Table.php">Employees_Managers</a>
    <a href="F_Table.php" style="color: #486ce4;font-weight: bold">Facility</a>
    <a href="../Vaccination/V_Table.php">Vaccination</a>
    <a href="../Infection/I_Table.php">Infection</a>
    <a href="../Schedule/S_Table.php">Schedule</a>
  </div>

  <?php
  $tableName = "Facility";
  include '../Database/getTable.php';

  // check if form is submitted
  if(isset($_GET['facilityID'])) {
    // retrieve the specific row
    $facilityID = $_GET['facilityID'];
    $sql = "SELECT * FROM $tableName WHERE FacilityID = $facilityID";
    $result = mysqli_query($conn, $sql);

    // display the row in a table
    if(mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr><th>Facility ID</th><th>Name</th><th>Address</th><th>City</th><th>Province</th><th>Postal Code</th><th>Phone Number</th><th>Web Address</th><th>Type</th><th>Capacity</th></tr>";
      while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['FacilityID']."</td><td>".$row['Name']."</td><td>".$row['Address']."</td><td>".$row['City']."</td><td>".$row['Province']."</td><td>".$row['PostalCode']."</td><td>".$row['PhoneNumber']."</td><td>".$row['WebAddress']."</td><td>".$row['Type']."</td><td>".$row['Capacity']."</td></tr>";
      }
      echo "</table>";
    } else {
      echo "No results found.";
    }
  }
  ?>

  <form action="./F_InsertRow.php">
    <button class="button insert">Insert Row</button>
  </form>

  <form action="./F_DisplayRow.php">
    <label for="facilityID">Enter the Facility ID:</label>
    <input type="text" name="facilityID" placeholder="INTEGER" id="facilityID">
    <button class="button display">Display Specific Row</button>
    <input type="hidden" name="table_name" value="Facility" />
  </form>

</body>

</html>
