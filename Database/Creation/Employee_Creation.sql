USE fac353_4;
CREATE TABLE Employees_Managers (
    EmployeeID INT PRIMARY KEY,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    DateOfBirth DATE,
    MedicareCardNumber VARCHAR(12) NOT NULL UNIQUE,
    TelephoneNumber VARCHAR(20),
    Address VARCHAR(255),
    City VARCHAR(50),
    Province VARCHAR(50),
    PostalCode VARCHAR(10),
    Citizenship VARCHAR(50),
    EmailAddress VARCHAR(255),
    Role VARCHAR(50),
    Is_Manager BOOLEAN DEFAULT false
);
