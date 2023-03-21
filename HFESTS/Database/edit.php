  <?php
  include_once 'config.php';

  if ($_GET['table_name'] == 'Employees_Managers') {
    //$sql = "DELETE FROM Employees_Managers WHERE EmployeeID='{$_GET["EID"]}' AND FirstName='{$_GET['FN']}' AND LastName='{$_GET["LN"]}' AND DateOfBirth='{$_GET["DOB"]}' AND MedicareCardNumber='{$_GET["MCN"]}' AND TelephoneNumber='{$_GET["Tel"]}' AND Address='{$_GET["Add"]}' AND City='{$_GET["City"]}' AND Province='{$_GET["Prov"]}' AND PostalCode='{$_GET["PC"]}' AND Citizenship='{$_GET["CS"]}' AND EmailAddress='{$_GET["EA"]}' AND Role='{$_GET["Role"]}' AND Is_Manager='{$_GET["IM"]}'";
    include_once '../Employees_Managers/E_EditRow.php';
    $URLpath = "../Employees_Managers/E_Table.php";
  } else if ($_GET['table_name'] == 'Facility') {
    //$sql = "DELETE FROM Facility WHERE FacilityID='{$_GET["FID"]}' AND Name='{$_GET["Name"]}' AND Address='{$_GET["Add"]}' AND City='{$_GET["City"]}' AND Province='{$_GET["Prov"]}' AND PostalCode='{$_GET["PC"]}' AND PhoneNumber='{$_GET["PN"]}' AND WebAddress='{$_GET["WA"]}' AND Type='{$_GET["Type"]}' AND Capacity='{$_GET["Cap"]}'";
    include_once '../Facility/F_EditRow.php';
    $URLpath = "../Facility/F_Table.php";
  } else if ($_GET['table_name'] == 'Vaccination') {
    //$sql = "DELETE FROM Vaccination WHERE EmployeeID='{$_GET["EID"]}' AND FacilityID='{$_GET["FID"]}' AND VaccineType='{$_GET["Type"]}' AND DoseNumber='{$_GET["DN"]}' AND VaccinationDate='{$_GET["Date"]}'";
    include_once '../Vaccination/V_EditRow.php';
    $URLpath = "../Vaccination/V_Table.php";
  } else if ($_GET['table_name'] == 'Infection') {
    //$sql = "DELETE FROM Infection WHERE EmployeeID='{$_GET["EID"]}' AND InfectionName='{$_GET["Name"]}' AND InfectionType='{$_GET["Type"]}' AND InfectionDate='{$_GET["Date"]}'";
    include_once '../Infection/I_EditRow.php';
    $URLpath = "../Infection/I_Table.php";
  } else if ($_GET['table_name'] == 'Schedule') {
    //$sql = "DELETE FROM Infection WHERE EmployeeID='{$_GET["EID"]}' AND FacilityID='{$_GET["FID"]}' AND StartDate='{$_GET["SDate"]}' AND EndDate='{$_GET["EDate"]}' AND StartTime='{$_GET["STime"]}' AND EndTime='{$_GET["ETime"]}'";
    include_once '../Schedule/S_EditRow.php';
    $URLpath = "../Schedule/S_Table.php";
  }

  /*
  if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript'>";
    echo 'alert("Record edited successfully");';
    echo 'window.location.replace("' . $URLpath . '");';
    echo "</script>";
  } else {
    $message = "ERROR: " . mysqli_error($conn);
    echo "<script type='text/javascript'>alert('$message');";
    echo 'window.location.replace("' . $URLpath . '");';
    echo "</script>";
  }*/
  ?>