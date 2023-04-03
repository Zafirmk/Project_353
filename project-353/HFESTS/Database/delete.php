  <?php
  include_once 'config.php';

  // Replacing ' with '' since SQL reads '' as '
  foreach ($_GET as $key => $value) {
    $_GET[$key] = str_replace("'", "''", $value);
  }

  if ($_GET['tableName'] == 'Employees_Managers') {
    $sql = "DELETE FROM Employees_Managers WHERE EmployeeID='{$_GET["EID"]}' AND FirstName='{$_GET['FN']}' AND LastName='{$_GET["LN"]}' AND DateOfBirth='{$_GET["DOB"]}' AND MedicareCardNumber='{$_GET["MCN"]}' AND TelephoneNumber='{$_GET["Tel"]}' AND Address='{$_GET["Add"]}' AND City='{$_GET["City"]}' AND Province='{$_GET["Prov"]}' AND PostalCode='{$_GET["PC"]}' AND Citizenship='{$_GET["CS"]}' AND EmailAddress='{$_GET["EA"]}' AND Role='{$_GET["Role"]}' AND Is_Manager='{$_GET["IM"]}'";
    $URLpath = "../Employees_Managers/E_Table.php";
  } else if ($_GET['tableName'] == 'Facility') {
    $sql = "DELETE FROM Facility WHERE FacilityID='{$_GET["FID"]}' AND Name='{$_GET["Name"]}' AND Address='{$_GET["Add"]}' AND City='{$_GET["City"]}' AND Province='{$_GET["Prov"]}' AND PostalCode='{$_GET["PC"]}' AND PhoneNumber='{$_GET["PN"]}' AND WebAddress='{$_GET["WA"]}' AND Type='{$_GET["Type"]}' AND Capacity='{$_GET["Cap"]}'";
    $URLpath = "../Facility/F_Table.php";
  } else if ($_GET['tableName'] == 'Vaccination') {
    $sql = "DELETE FROM Vaccination WHERE EmployeeID='{$_GET["EID"]}' AND FacilityID='{$_GET["FID"]}' AND VaccineType='{$_GET["Type"]}' AND DoseNumber='{$_GET["DN"]}' AND VaccinationDate='{$_GET["Date"]}'";
    $URLpath = "../Vaccination/V_Table.php";
  } else if ($_GET['tableName'] == 'Infection') {
    $sql = "DELETE FROM Infection WHERE EmployeeID='{$_GET["EID"]}' AND InfectionName='{$_GET["Name"]}' AND InfectionType='{$_GET["Type"]}' AND InfectionDate='{$_GET["Date"]}'";
    $URLpath = "../Infection/I_Table.php";
  } else if ($_GET['tableName'] == 'Schedule') {
    /* Handling the case where the attribute is null */
    if ($_GET["EDate"] == '') {
      $sql = "DELETE FROM Schedule WHERE EmployeeID='{$_GET["EID"]}' AND FacilityID='{$_GET["FID"]}' AND StartDate='{$_GET["SDate"]}' AND EndDate IS NULL AND StartTime='{$_GET["STime"]}' AND EndTime='{$_GET["ETime"]}' AND Day='{$_GET["Day"]}'";
    } else {
      $sql = "DELETE FROM Schedule WHERE EmployeeID='{$_GET["EID"]}' AND FacilityID='{$_GET["FID"]}' AND StartDate='{$_GET["SDate"]}' AND EndDate='{$_GET["EDate"]}' AND StartTime='{$_GET["STime"]}' AND EndTime='{$_GET["ETime"]}' AND Day='{$_GET["Day"]}'";
    }
    $URLpath = "../Schedule/S_Table.php";
  }

  if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript'>";
    echo 'alert("Record deleted successfully");';
    echo 'window.location.replace("' . $URLpath . '");';
    echo "</script>";
  }

  mysqli_close($conn); // closing connection after deletion
  ?>