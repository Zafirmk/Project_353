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
    $mail->setFrom("compd9376@gmail.com", "HFESTS Admin");
    $mail->Body = "<h1 style=\"text-align: center\">One of your colleagues that you have worked with in the past two weeks has been infected with COVID-19.</h1>";
  
    $query = "SELECT FirstName, LastName, EmailAddress FROM Schedule s INNER JOIN Employees_Managers e ON s.EmployeeID = e.EmployeeID WHERE isnull(EndDate) AND FacilityID IN (SELECT FacilityID FROM Schedule WHERE EmployeeID = $InfectedEmployeeID) AND e.EmployeeID != $InfectedEmployeeID AND Role IN ('doctor', 'nurse') AND StartDate <= $InfectionDate";

    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result))
    {
      $mail->addAddress($row['EmailAddress'], $row['FirstName'].' '.$row['LastName']);
    }
    
    if ($mail->Send()) {
      echo "Email sent";
    }
    else{
      echo "Email fail";
    }
  
    $mail->smtpClose();
  }


?>