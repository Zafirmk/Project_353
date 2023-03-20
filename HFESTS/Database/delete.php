  <?php
  if ($_GET['table_name'] == 'Employees_Managers') {
    echo $_GET["EID"];
    echo $_GET["FN"];
    echo $_GET["LN"];
    echo $_GET["DOB"];
    echo $_GET["MCN"];
    echo $_GET["Tel"];
    echo $_GET["Add"];
    echo $_GET["City"];
    echo $_GET["Prov"];
    echo $_GET["PC"];
    echo $_GET["CS"];
    echo $_GET["EA"];
    echo $_GET["Role"];
    echo $_GET["IM"];
  } else if ($_GET['table_name'] == 'Facility') {
    echo $_GET["FID"];
    echo $_GET["Name"];
    echo $_GET["Add"];
    echo $_GET["City"];
    echo $_GET["Prov"];
    echo $_GET["PC"];
    echo $_GET["PN"];
    echo $_GET["WA"];
    echo $_GET["Type"];
    echo $_GET["Cap"];
  } else if ($_GET['table_name'] == 'Vaccination') {
    echo $_GET["EID"];
    echo $_GET["FID"];
    echo $_GET["Type"];
    echo $_GET["DN"];
    echo $_GET["Date"];
  } else if ($_GET['table_name'] == 'Infection') {
    echo $_GET["EID"];
    echo $_GET["Name"];
    echo $_GET["Type"];
    echo $_GET["Date"];
  } else if ($_GET['table_name'] == 'Schedule') {
    echo $_GET["EID"];
    echo $_GET["FID"];
    echo $_GET["SDate"];
    echo $_GET["EDate"];
    echo $_GET["STime"];
    echo $_GET["ETime"];
  }
  ?>