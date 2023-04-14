<html>

<head>
  <title>Edit Facility Information</title>
  <link rel="stylesheet" href="../style.css" />
</head>

<body>
  <h1>Information Update</h1>

  <style>
		form {
			/* display: flex; */
			flex-direction: column;
			align-items: center;
			margin-top: 50px;
		}

		label {
			margin: 10px;
			font-size: 18px;
			font-weight: bold;
		}

		input[type="text"], select {
			padding: 10px;
			font-size: 16px;
			border: 2px solid #ccc;
			border-radius: 4px;
			width: 50%;
			box-sizing: border-box;
			margin-bottom: 20px;
		}

		input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			font-size: 16px;
		}
	</style>

  <form method = "post" action = "process.php">
    <label for = "Name">Name: </label>
    <input type = "text" id = "Name" name = "Name"><br>

    <label for = "FacilityAddress">Address: </label>
    <input type = "text" id = "FacilityAddress" name = "FacilityAddress"><br>

    <label for = "FacilityCity">City: </label>
    <input type = "text" id = "FacilityCity" name = "FacilityCity"><br>

    <label for = "FacilityProvince">Province: </label>
    <input type = "text" id = "FacilityProvince" name = "FacilityProvince"><br>

    <label for = "FacilityPostalCode">Postal Code: </label>
    <input type = "text" id = "FacilityPostalCode" name = "FacilityPostalCode"><br>

    <label for = "FacilityPhoneNumber">Phone Number: </label>
    <input type = "text" id = "FacilityPhoneNumber" name = "FacilityPhoneNumber"><br>

    <label for = "FacilityWebAddress">Web Address: </label>
    <input type = "text" id = "FacilityWebAddress" name = "FacilityWebAddress"><br>

    <label for = "FacilityType">Type: </label>
    <input type = "text" id = "FacilityType" name = "FacilityType"><br>

    <label for = "FacilityCapacity">Capacity: </label>
    <input type = "text" id = "FacilityCapacity" name = "FacilityCapacity"><br>

    <input type = "submit" value = "Save">
  </form>
</body>
</html>

<?php
  include_once 'config.php';

  if(isset($_POST["save"])) {
    // $EID = $_POST["EmployeeID"];
    // $FN = $_POST["FirstName"];
    // $LN = $_POST["LastName"];
    // $DOB = $_POST["DateOfBirth"];
    // $MCN = $_POST["MedicareCardNumber"];
    // $Tel = $_POST["TelephoneNumber"];
    // $Add = $_POST["Address"];
    // $City = $_POST["City"];
    // $Prov = $_POST["Province"];
    // $PC = $_POST["PostalCode"];
    // $CS = $_POST["Citizenship"];
    // $EA = $_POST["EmailAddress"];
    // $Role = $_POST["Role"];
    // $IM = $_POST["Is_Manager"];

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

    // $VType = $_POST["VaccineType"];
    // $DoseNum = $_POST["DoseNumber"];
    // $VDate = $_POST["VaccinationDate"];

    // $IName = $_POST["InfectionName"];
    // $IType = $_POST["InfectionType"];
    // $IDate = $_POST["InfectionDate"];

    // if ($_GET['tableName'] == 'Employees_Managers') {
    //   $sql = "UPDATE Employees_Managers SET EmployeeID = '$EID', FirstName = '$FN', LastName = '$LN', DateOfBirth = '$DOB', MedicareCardNumber = '$MCN', TelephoneNumber = '$Tel', Address = '$Add', City = '$City', Province = '$Prov', PostalCode = '$PC', Citizenship = '$CS', EmailAddress = '$EA', Role = '$Role', Is_Manager = '$IM'";
    //   $URLpath = "../Employees_Managers/E_Table.php";
    // }
    if ($_GET['tableName'] == 'Facility') {
      $sql = "UPDATE Facility SET FacilityID = '$FID', Name = '$Name', FacilityAddress = '$FAdd', FacilityCity = '$FCity', FacilityProvince = '$FProv', FacilityPostalCode = '$FPC', FacilityPhoneNumber = '$FPN', FacilityWebAddress = '$FWA', FacilityType = '$FType', FacilityCapacity = '$FCapacity'";
      $URLpath = "../Facility/F_Table.php";    
    }
    // if ($_GET['tableName'] == 'Vaccination') {
    //   $sql = "UPDATE Vaccination SET EmployeeID = '$EID', FacilityID = '$FID', VaccineType = '$VType', DoseNumber = '$DoseNum', VaccinationDate = '$VDate'";
    //   $URLpath = "../Vaccination/V_Table.php";
    // }
    // if ($_GET['tableName'] == 'Infection') {
    //   $sql = "UPDATE Infection SET EmployeeID = '$EID', InfectionName = '$IName', InfectionType = '$IType', InfectionDate = '$IDate'";
    //   $URLpath = "../Infection/I_Table.php";
    // }

  }

  ?>