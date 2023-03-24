  <?php
  include_once 'config.php';

  // Replacing ' with '' since SQL reads '' as '
  foreach ($_GET as $key => $value) {
    $_GET[$key] = str_replace("'", "''", $value);
  }

  if ($_GET['table_name'] == 'Employees_Managers') {
    $sql = "INSERT INTO Employees_Managers VALUES ({$_GET['eid']}, '{$_GET['fname']}', '{$_GET['lname']}', '{$_GET['dob']}', '{$_GET['mcn']}', '{$_GET['tel']}', '{$_GET['add']}', '{$_GET['city']}', '{$_GET['prov']}', '{$_GET['pc']}', '{$_GET['cs']}', '{$_GET['ea']}', '{$_GET['role']}', '{$_GET['im']}')";
    $URLpath = "../Employees_Managers/E_Table.php";
  } else if ($_GET['table_name'] == 'Facility') {
    $sql = "INSERT INTO Facility VALUES ({$_GET['fid']}, '{$_GET['name']}', '{$_GET['add']}', '{$_GET['city']}', '{$_GET['prov']}', '{$_GET['pc']}', '{$_GET['pn']}', '{$_GET['wa']}', '{$_GET['type']}', {$_GET['cap']})";
    $URLpath = "../Facility/F_Table.php";
  } else if ($_GET['table_name'] == 'Vaccination') {
    $sql = "INSERT INTO Vaccination VALUES ({$_GET['eid']}, {$_GET['fid']}, '{$_GET['type']}', '{$_GET['dn']}', '{$_GET['date']}')";
    $URLpath = "../Vaccination/V_Table.php";
  } else if ($_GET['table_name'] == 'Infection') {
    $sql = "INSERT INTO Infection VALUES ({$_GET['eid']}, '{$_GET['name']}', '{$_GET['type']}', '{$_GET['date']}')";
    $URLpath = "../Infection/I_Table.php";
  } else if ($_GET['table_name'] == 'Schedule') {
    $sql = "INSERT INTO Schedule VALUES ({$_GET['eid']}, {$_GET['fid']}, '{$_GET['sdate']}', '{$_GET['edate']}', '{$_GET['stime']}', '{$_GET['etime']}')";
    $URLpath = "../Schedule/S_Table.php";
  }

  if (mysqli_query($conn, $sql)) {
    echo "<script language='javascript'>";
    echo 'alert("Record inserted successfully");';
    echo 'window.location.replace("' . $URLpath . '");';
    echo "</script>";
  } else {
    $message = "ERROR: " . mysqli_error($conn);
    if (strpos($message, "CONSTRAINT")) {
      echo "<script type='text/javascript'>alert('$message');";
    } else {
      echo "<script type='text/javascript'>alert('ERROR: One or more required fields are inputted with incorrect value type or not unique value.');";
    }
    echo 'window.location.replace("' . $URLpath . '");';
    echo "</script>";
  }

  mysqli_close($conn); // closing connection after insertion
  ?>