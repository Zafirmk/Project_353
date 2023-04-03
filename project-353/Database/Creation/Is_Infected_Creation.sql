USE fac353_4;
CREATE TABLE Is_Infected (
	EmployeeID INT,
    InfectionDate DATE,
    PRIMARY KEY (EmployeeID, InfectionDate),
    FOREIGN KEY (EmployeeID) REFERENCES Employees_Managers(EmployeeID)
);