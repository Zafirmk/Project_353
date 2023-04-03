USE fac353_4;
INSERT INTO Employees_Managers (EmployeeID, FirstName, LastName, DateOfBirth, MedicareCardNumber, TelephoneNumber, Address, City, Province, PostalCode, Citizenship, EmailAddress, Role, Is_Manager)
VALUES
    (1, 'John', 'Doe', '1990-05-15', '123456789012', '555-1234', '123 Main St', 'Toronto', 'Ontario', 'A1B2C3', 'Canada', 'john.doe@example.com', 'doctor', false),
    (2, 'Jane', 'Smith', '1985-12-01', '234567890123', '555-5678', '456 Elm St', 'Vancouver', 'British Columbia', 'D4E5F6', 'Canada', 'jane.smith@example.com', 'nurse', false),
    (3, 'Bob', 'Johnson', '1970-08-22', '345678901234', '555-9012', '789 Maple Ave', 'Calgary', 'Alberta', 'G7H8I9', 'Canada', 'bob.johnson@example.com', 'IT', false),
    (4, 'Emily', 'Wong', '1995-02-10', '456789012345', '555-3456', '321 Oak St', 'Montreal', 'Quebec', 'J1K2L3', 'Canada', 'emily.wong@example.com', 'janitor', false),
    (5, 'David', 'Brown', '1982-11-07', '567890123456', '555-6789', '654 Pine St', 'Halifax', 'Nova Scotia', 'M4N5O6', 'Canada', 'david.brown@example.com', 'administrative personnel', true),
    (6, 'Sarah', 'Lee', '1978-06-29', '678901234567', '555-2345', '987 Cedar Ave', 'Victoria', 'British Columbia', 'P7Q8R9', 'Canada', 'sarah.lee@example.com', 'doctor', false),
    (7, 'Michael', 'Nguyen', '1991-09-18', '789012345678', '555-7890', '159 Laurel St', 'Ottawa', 'Ontario', 'S1T2U3', 'Canada', 'michael.nguyen@example.com', 'nurse', false),
    (8, 'Karen', 'Kim', '1987-04-03', '890123456789', '555-4567', '753 Birch Rd', 'Winnipeg', 'Manitoba', 'V4W5X6', 'Canada', 'karen.kim@example.com', 'IT', false),
    (9, 'William', 'Jones', '1965-01-20', '901234567890', '555-0123', '852 Spruce Blvd', 'Toronto', 'Ontario', 'A1B2C3', 'Canada', 'william.jones@example.com', 'administrative personnel', true),
    (10, 'Emily', 'Davis', '1980-12-25', '012345678901', '555-5678', '753 Elm Ave', 'Vancouver', 'British Columbia', 'D4E5F6', 'Canada', 'emily.davis@example.com', 'janitor', false);