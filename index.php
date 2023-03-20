<html>

<head>
  <title></title>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div class="topnav">
    <a class="active" href="#home">Home</a>

    <div class="dropdown">
      <button class="dropbtn">Employees
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">CREATE</a>
        <a href="#">DELETE</a>
        <a href="#">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Facility
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">CREATE</a>
        <a href="#">DELETE</a>
        <a href="#">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Vaccination
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">CREATE</a>
        <a href="#">DELETE</a>
        <a href="#">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Infection
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">CREATE</a>
        <a href="#">DELETE</a>
        <a href="#">QUERY</a>
      </div>
    </div>

    <div class="dropdown">
      <button class="dropbtn">Schedule
        <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
        <a href="#">CREATE</a>
        <a href="#">DELETE</a>
        <a href="#">QUERY</a>
      </div>
    </div>
  </div>

  <div class="web_title">
    <h2>Welcome to Health Facility Employee Status Tracking System (HFESTS)</h2>
  </div>

  </div class="searchbar">
  <form action="<?php $_PHP_SELF ?>" method="POST">
    <input type="text" placeholder="Search">
    <input class="button" type="submit" />
  </form>
  </div>

</body>

</html>