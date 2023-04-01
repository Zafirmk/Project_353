USE fac353_4;
CREATE TABLE Vaccination (
    EmployeeID INT,
    FacilityID INT,
    VaccineType VARCHAR(50),
    DoseNumber INT,
    VaccinationDate DATE,
    PRIMARY KEY (EmployeeID, FacilityID, DoseNumber),
    FOREIGN KEY (EmployeeID) REFERENCES Employees_Managers(EmployeeID),
    FOREIGN KEY (FacilityID) REFERENCES Facility(FacilityID)
);
