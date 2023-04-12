<?php
  include_once 'config.php';

  if(isset($_POST["submit"])) {
    $EID = $_POST["EmployeeID"];
    $FN = $_POST["FirstName"];
    $LN = $_POST["LastName"];
    $DOB = $_POST["DateOfBirth"];
    $MCN = $_POST["MedicareCardNumber"];
    $Tel = $_POST["TelephoneNumber"];
    $Add = $_POST["Address"];
    $City = $_POST["City"];
    $Prov = $_POST["Province"];
    $PC = $_POST["PostalCode"];
    $CS = $_POST["Citizenship"];
    $EA = $_POST["EmailAddress"];
    $Role = $_POST["Role"];
    $IM = $_POST["Is_Manager"];

    $query = "SELECT * FROM Employees_Managers WHERE EmployeeID = '$EID'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    $FN = $row['FirstName'];
    $LN = $row['LastName'];
    $DOB = $row['DateOfBirth'];
    $Tel = $row['TelephoneNumber'];
    $Add = $row['Address'];
    $City = $row['City'];
    $Prov = $row['Province'];
    $PC = $row['PostalCode'];
    $CS = $row['Citizenship'];
    $EA = $row['EmailAddress'];
    $Role = $row['Role'];
    $IM = $row['Is_Manager'];

    $FID = $_POST["FacilityID"];
    $Name = $_POST["Name"];
    $FAdd = $_POST["FacilityAddress"];
    $FCity = $_POST["FacilityCity"];
    $FProv = $_POST["FacilityProvince"];
    $FPC = $_POST["FacilityPostalCode"];
    $FPN = $_POST["FacilityPhoneNumber"];
    $FWA = $_POST["FacilityWebAddress"];
    $FType = $_POST["FacilityType"];
    $FCapacity = $_POST["FacilityCapacity"];

    $VType = $_POST["VaccineType"];
    $DoseNum = $_POST["DoseNumber"];
    $VDate = $_POST["VaccinationDate"];

    $IName = $_POST["InfectionName"];
    $IType = $_POST["InfectionType"];
    $IDate = $_POST["InfectionDate"];

    if ($_GET['tableName'] == 'Employees_Managers') {
      $sql = "UPDATE Employees_Managers SET EmployeeID = '$EID', FirstName = '$FN', LastName = '$LN', DateOfBirth = '$DOB', MedicareCardNumber = '$MCN', TelephoneNumber = '$Tel', Address = '$Add', City = '$City', Province = '$Prov', PostalCode = '$PC', Citizenship = '$CS', EmailAddress = '$EA', Role = '$Role', Is_Manager = '$IM'";
      $URLpath = "../Employees_Managers/E_Table.php";
    }
    else if ($_GET['tableName'] == 'Facility') {
      $sql = "UPDATE Facility SET FacilityID = '$FID', Name = '$Name', FacilityAddress = '$FAdd', FacilityCity = '$FCity', FacilityProvince = '$FProv', FacilityPostalCode = '$FPC', FacilityPhoneNumber = '$FPN', FacilityWebAddress = '$FWA', FacilityType = '$FType', FacilityCapacity = '$FCapacity'";
      $URLpath = "../Facility/F_Table.php";    
    }
    else if ($_GET['tableName'] == 'Vaccination') {
      $sql = "UPDATE Vaccination SET EmployeeID = '$EID', FacilityID = '$FID', VaccineType = '$VType', DoseNumber = '$DoseNum', VaccinationDate = '$VDate'";
      $URLpath = "../Vaccination/V_Table.php";
    }
    else if ($_GET['tableName'] == 'Infection') {
      $sql = "UPDATE Infection SET EmployeeID = '$EID', InfectionName = '$IName', InfectionType = '$IType', InfectionDate = '$IDate'";
      $URLpath = "../Infection/I_Table.php";
    }

  }

  ?>