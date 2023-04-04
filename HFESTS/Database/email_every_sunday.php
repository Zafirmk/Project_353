<?php
    ini_set('display_errors', '1');
  include_once 'config.php';

  require '../../includes/PHPMailer.php';
  require '../../includes/SMTP.php';
  require '../../includes/Exception.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  $facilities_query = "SELECT DISTINCT f.FacilityID
  FROM Schedule s
  INNER JOIN Facility f ON f.FacilityID = s.FacilityID;";

  $result1 = mysqli_query($conn, $facilities_query);

  while ($facility = mysqli_fetch_array($result1)){
    

    $all_employees_query = "SELECT DISTINCT s.EmployeeID
    FROM fac353_4.Schedule s
    INNER JOIN fac353_4.Employees_Managers e ON e.EmployeeID = s.EmployeeID
    INNER JOIN fac353_4.Facility f ON f.FacilityID = s.FacilityID
    WHERE f.FacilityID = " . "'" . $facility['FacilityID'] . "';"; 

    $result2 = mysqli_query($conn, $all_employees_query);

    while($all_employees = mysqli_fetch_array($result2)){


        $specific_employee_query = "SELECT e.EmployeeID, f.Name, f.Address, e.FirstName, e.LastName, e.EmailAddress, s.Day, s.StartTime, s.EndTime
        FROM fac353_4.Schedule s
        INNER JOIN fac353_4.Employees_Managers e ON e.EmployeeID = s.EmployeeID
        INNER JOIN fac353_4.Facility f ON f.FacilityID = s.FacilityID
        WHERE e.EmployeeID =" . "'" . $all_employees['EmployeeID'] . "'" . " AND f.FacilityID = " . "'" . $facility['FacilityID'] . "';";

        $result3 = mysqli_query($conn, $specific_employee_query);


        $ScheduleTable = "<table border = '1'><tr><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
        $EmailBody = NULL;
        $Subject = NULL;
        $To = NULL;
        $days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

        while($specific_employee = mysqli_fetch_array($result3)){
            $EmailBody = "<h1 style = 'text-align:center'>Schedule Update</h1> Facility Name: " . $specific_employee['Name'] . "<br>" . "Address: " . $specific_employee['Address'] . "<br>" . "Employee Name: " . $specific_employee['FirstName'] . " " . $specific_employee['LastName'] . "<br>" . "Email Address: " . $specific_employee['EmailAddress'] . "<br>";
            $Subject = $specific_employee['Name'] . " Schedule for " . date("Y/m/d") . " to " . date("Y/m/d", strtotime("+1 week", strtotime(date("Y/m/d"))));
            $From = $specific_employee['Name'];
            $To = $specific_employee['EmailAddress'];
        }

        $result3 -> data_seek(0);

        foreach($days as $day){
            $found = FALSE;
            while($specific_employee = mysqli_fetch_array($result3)){
                if ($day == $specific_employee['Day']){
                    $ScheduleTable .= "<tr><td>" . $specific_employee['Day'] . "</td><td>" . $specific_employee['StartTime'] . "</td><td>" . $specific_employee['EndTime'] . "</td></tr>";
                    $found = TRUE;
                    break;
                }
            }
            if (!$found){
                $ScheduleTable .= "<tr><td>" . $day . "</td><td>" . 'No Assignment' . "</td><td>" . 'No Assignment' . "</td></tr>";
            }
            $result3->data_seek(0);
            
        }
        $ScheduleTable .= "</table>";
        $EmailBody .= $ScheduleTable;

        emailEmployees($conn, $Subject, $EmailBody, $From, $To);

    }

  }


  function emailEmployees($conn, $subject, $emailbody, $from, $to){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->IsHTML(true);
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "compd9376@gmail.com";
    $mail->Password = "eucmgghkonheltbn";
    $mail->Subject = $subject;
    $mail->setFrom("compd9376@gmail.com", $from);
    $mail->Body = $emailbody;
    $mail->addAddress($to);
  
    if ($mail->Send()) {
      echo "Email sent";
      $email_query = "INSERT INTO Emails VALUES ('" . date("Y-m-d") . "', '" . $from . "', '" . $mail->Subject . "', '" . $mail->Body . "');";
      if (mysqli_query($conn, $email_query)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $email_query . "<br>" . mysqli_error($conn);
      }
    }
    else{
      echo "Email fail";
    }
  
    $mail->smtpClose();
  }


?>