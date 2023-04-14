USE fac353_4;
CREATE TABLE Infection (
    EmployeeID INT,
    InfectionName VARCHAR(100),
    InfectionType VARCHAR(50),
    InfectionDate DATE,
    PRIMARY KEY (EmployeeID, InfectionDate),
    FOREIGN KEY (EmployeeID) REFERENCES Employees_Managers(EmployeeID)
);