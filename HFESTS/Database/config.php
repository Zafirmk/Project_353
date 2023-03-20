  <?php

  $conn = new mysqli("fac353.encs.concordia.ca:3306", "fac353_4", "ZAMP2345", "fac353_4");

  // If connection failed
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>