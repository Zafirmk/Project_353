USE fac353_4;
CREATE TABLE Facility (
    FacilityID INT PRIMARY KEY,
    Name VARCHAR(255),
    Address VARCHAR(255),
    City VARCHAR(255),
    Province VARCHAR(255),
    PostalCode VARCHAR(10),
    PhoneNumber VARCHAR(20),
    WebAddress VARCHAR(255),
    Type VARCHAR(50),
    Capacity INT
);