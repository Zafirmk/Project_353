<?php
    ini_set('display_errors', '1');
  include_once 'config.php';

  require '../../includes/PHPMailer.php';
  require '../../includes/SMTP.php';
  require '../../includes/Exception.php';

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  function emailEmployees($conn, $InfectedEmployeeID, $InfectionDate){
    $facilityName = Null;
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->IsHTML(true);
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = "true";
    $mail->SMTPSecure = "tls";
    $mail->Port = "587";
    $mail->Username = "compd9376@gmail.com";
    $mail->Password = "eucmgghkonheltbn";
    $mail->Subject = "WARNING [HIGH RISK]";
    $mail->Body = "<h1 style=\"text-align: center\">One of your colleagues that you have worked with in the past two weeks has been infected with COVID-19.</h1>";
  
    $query = "SELECT FirstName, LastName, EmailAddress, f.Name AS 'FacilityName' FROM Schedule s INNER JOIN Employees_Managers e ON s.EmployeeID = e.EmployeeID INNER JOIN Facility f ON f.FacilityID = s.FacilityID WHERE ISNULL(EndDate) AND s.FacilityID IN (SELECT FacilityID FROM Schedule WHERE EmployeeID = $InfectedEmployeeID) AND e.EmployeeID != $InfectedEmployeeID AND Role IN ('doctor' , 'nurse') AND StartDate <= $InfectionDate";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result))
    {
      $mail->addAddress($row['EmailAddress'], $row['FirstName'].' '.$row['LastName']);
      $mail->setFrom("compd9376@gmail.com", $row['FacilityName']);
      $facilityName = $row['FacilityName'];
    }
    
    if ($mail->Send()) {
      echo "Email sent";
      $email_query = "INSERT INTO Emails VALUES ('" . date("Y-m-d") . "', '" . $facilityName . "', '" . $mail->Subject . "', '" . $mail->Body . "');";
      // $email_query = "INSERT INTO Emails VALUES ('2022-01-01', 'Test Hospital', 'Test Subject', 'Test Body')";
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