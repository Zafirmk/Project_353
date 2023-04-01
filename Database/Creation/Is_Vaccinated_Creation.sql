USE fac353_4;
CREATE TABLE Is_Vaccinated(
	EmployeeID INT,
    FacilityID INT,
    DoseNumber INT,
    PRIMARY KEY (EmployeeID, FacilityID, DoseNumber),
    FOREIGN KEY (EmployeeID) REFERENCES Employees_Managers(EmployeeID),
    FOREIGN KEY (FacilityID) REFERENCES Facility(FacilityID)
);