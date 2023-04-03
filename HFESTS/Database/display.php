<?php
include_once 'config.php';

  if (isset($_GET['employeeID'])) {
    $employeeID = $_GET['employeeID']; //value fetched after entry of user

    // // Query the database to fetch the row corresponding to the employeeID
    // $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '$employeeID'";
    // $result = mysqli_query($conn, $query);

    //checking if row was found
    if (mysqli_num_rows($result) > 0) {
      echo "<table>"; //display table
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row['EmployeeID']."</td><td>".$row['FirstName']."</td><td>".$row['LastName']."</td><td>".$row['EmailAddress']."</td></tr>";
      }
      echo "</table>";
    } else { //if there is no row with that id, then there is going to be error
      echo "EmployeeID " . $employeeID . " not found.";
    }

    mysqli_close($conn); //close db connection
  }

  if($_GET['tableName']=='Employees_Managers'){
        // Query the database to fetch the row corresponding to the employeeID
        $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '$employeeID'";
        $result = mysqli_query($conn, $query);
  }
?>