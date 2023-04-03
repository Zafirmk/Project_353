<html>

<head>
  <title>Edit Information</title>
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
    <label for = "FirstName">First Name: </label>
    <input type = "text" id = "FirstName" name = "FirstName"><br>

    <label for = "LastName">Last Name: </label>
    <input type = "text" id = "LastName" name = "LastName"><br>

    <label for = "DateOfBirth">Date of birth: </label>
    <input type = "text" id = "DateOfBirth" name = "DateOfBirth"><br>

    <label for = "Telephone">Telephone: </label>
    <input type = "text" id = "Telephone" name = "Telephone"><br>

    <label for = "Address">Address: </label>
    <input type = "text" id = "Address" name = "Address"><br>

    <label for = "City">City: </label>
    <input type = "text" id = "City" name = "City"><br>

    <label for = "Province">Province: </label>
    <input type = "text" id = "Province" name = "Province"><br>

    <label for = "PostalCode">Postal Code: </label>
    <input type = "text" id = "PostalCode" name = "PostalCode"><br>

    <label for = "Citizenship">Citizenship: </label>
    <input type = "text" id = "Citizenship" name = "Citizenship"><br>

    <label for = "EmailAddress">Email Address: </label>
    <input type = "text" id = "EmailAddress" name = "EmailAddress"><br>

    <label for = "Role">Role: </label>
    <input type = "text" id = "Role" name = "Role"><br>

    <label for = "Is_Manager">Manager (1) or not (0): </label>
    <input type = "text" id = "Is_Manager" name = "Is_Manager"><br>

    <input type = "submit" value = "Save">
  </form>
</body>
</html>

<?php
  include_once 'config.php';

  if(isset($_POST["save"])) {
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

    $FID = $_POST["FacilityID"];
    $Name = $_POST["Name"];
    $FAdd = $_POST["FacilityAddress"];
    $FID = $_POST["FacilityID"];

    if ($_GET['tableName'] == 'Employees_Managers') {
      $sql = "UPDATE Employees_Managers SET EmployeeID = '$EID', FirstName = 'FN', LastName = 'LN', DateOfBirth = 'DOB', MedicareCardNumber = 'MCN', TelephoneNumber = 'Tel', Address = 'Add', City = 'City', Province = 'Prov', PostalCode = 'PC', Citizenship = 'CS', EmailAddress = 'EA', Role = 'Role', Is_Manager = 'IM'";
      $URLpath = "../Employees_Managers/E_Table.php";
    }
    if ($_GET['tableName'] == 'Facility') {
      $sql = "UPDATE Facility SET FacilityID = '$FID', Name = 'Name', LastName = 'LN', DateOfBirth = 'DOB', MedicareCardNumber = 'MCN', TelephoneNumber = 'Tel', Address = 'Add', City = 'City', Province = 'Prov', PostalCode = 'PC', Citizenship = 'CS', EmailAddress = 'EA', Role = 'Role', Is_Manager = 'IM'";
      $URLpath = "../Employees_Managers/E_Table.php";
    }

  }

  ?>