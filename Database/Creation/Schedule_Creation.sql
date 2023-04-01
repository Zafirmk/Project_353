USE fac353_4;
CREATE TABLE Schedule (
    EmployeeID INT,
    FacilityID INT,
    StartDate DATE,
    EndDate DATE,
    StartTime TIME,
    EndTime TIME,
    Day VARCHAR(10),
    CHECK(StartDate < EndDate),
    CHECK(StartTime < EndTime),
    PRIMARY KEY (EmployeeID, FacilityID, StartDate, StartTime),
    FOREIGN KEY (EmployeeID) REFERENCES Employees_Managers(EmployeeID),
    FOREIGN KEY (FacilityID) REFERENCES Facility(FacilityID)
);
