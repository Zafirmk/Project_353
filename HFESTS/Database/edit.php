<?php
  include_once 'config.php';

  // Replacing ' with '' since SQL reads '' as '
  foreach ($_POST as $key => $value) {
    $_POST[$key] = str_replace("'", "''", $value);
  }

  if(isset($_POST["submit"])) {

    $query = "SELECT * FROM Employees_Managers WHERE EID = {$_GET['EID']}";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    // $EID = $_POST["EID"];
    $FN = $_POST["FN"];
    $LN = $_POST["LN"];
    $DOB = $_POST["DOB"];
    // $MCN = $_POST["MCN"];
    $Tel = $_POST["Tel"];
    $Add = $_POST["Add"];
    $City = $_POST["City"];
    $Prov = $_POST["Prov"];
    $PC = $_POST["PC"];
    $CS = $_POST["CS"];
    $EA = $_POST["EA"];
    $Role = $_POST["Role"];
    $IM = $_POST["IM"];

    // $FID = $_POST["FacilityID"];
    // $Name = $_POST["Name"];
    // $FAdd = $_POST["FacilityAddress"];
    // $FCity = $_POST["FacilityCity"];
    // $FProv = $_POST["FacilityProvince"];
    // $FPC = $_POST["FacilityPostalCode"];
    // $FPN = $_POST["FacilityPhoneNumber"];
    // $FWA = $_POST["FacilityWebAddress"];
    // $FType = $_POST["FacilityType"];
    // $FCapacity = $_POST["FacilityCapacity"];

    // $VType = $_POST["VaccineType"];
    // $DoseNum = $_POST["DoseNumber"];
    // $VDate = $_POST["VaccinationDate"];

    // $IName = $_POST["InfectionName"];
    // $IType = $_POST["InfectionType"];
    // $IDate = $_POST["InfectionDate"];

    if ($_GET['tableName'] == 'Employees_Managers') {
      $sql = "UPDATE Employees_Managers SET FN = '$FN', LN = '$LN', DOB = '$DOB', Tel = '$Tel', Add = '$Add', City = '$City', Prov = '$Prov', PC = '$PC', CS = '$CS', EA = '$EA', Role = '$Role', IM = '$IM' WHERE EID = '$EID'";
      mysqli_query($conn, $sql);
      // $URLpath = "../Employees_Managers/E_Table.php";
    }
    // else if ($_GET['tableName'] == 'Facility') {
    //   $sql = "UPDATE Facility SET FacilityID = '$FID', Name = '$Name', FacilityAddress = '$FAdd', FacilityCity = '$FCity', FacilityProvince = '$FProv', FacilityPostalCode = '$FPC', FacilityPhoneNumber = '$FPN', FacilityWebAddress = '$FWA', FacilityType = '$FType', FacilityCapacity = '$FCapacity'";
    //   $URLpath = "../Facility/F_Table.php";    
    // }
    // else if ($_GET['tableName'] == 'Vaccination') {
    //   $sql = "UPDATE Vaccination SET EmployeeID = '$EID', FacilityID = '$FID', VaccineType = '$VType', DoseNumber = '$DoseNum', VaccinationDate = '$VDate'";
    //   $URLpath = "../Vaccination/V_Table.php";
    // }
    // else if ($_GET['tableName'] == 'Infection') {
    //   $sql = "UPDATE Infection SET EmployeeID = '$EID', InfectionName = '$IName', InfectionType = '$IType', InfectionDate = '$IDate'";
    //   $URLpath = "../Infection/I_Table.php";
    // }
    // else if ($_GET['tableName'] == 'Schedule') {
    //   $sql = "UPDATE Schedule SET EmployeeID = '$EID', InfectionName = '$IName', InfectionType = '$IType', InfectionDate = '$IDate'";
    //   $URLpath = "../Schedule/S_Table.php";
    // }
  }

  ?>