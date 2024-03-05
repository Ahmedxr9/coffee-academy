-- Create Users table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Users')
BEGIN
    CREATE TABLE Users (
        UserID INT PRIMARY KEY IDENTITY(1,1),
        FullName VARCHAR(255),
        Email VARCHAR(255) UNIQUE,
        Password VARCHAR(255),
        UserType VARCHAR(50)
    );
END;

-- Create Courses table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Courses')
BEGIN
    CREATE TABLE Courses (
        CourseID INT PRIMARY KEY IDENTITY(1,1),
        CourseName VARCHAR(255)
    );
END;

-- Create UserCourses table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'UserCourses')
BEGIN
    CREATE TABLE UserCourses (
        UserCourseID INT PRIMARY KEY IDENTITY(1,1),
        UserID INT,
        CourseID INT,
        FOREIGN KEY (UserID) REFERENCES Users(UserID),
        FOREIGN KEY (CourseID) REFERENCES Courses(CourseID)
    );
END;

-- Create ShopProducts table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'ShopProducts')
BEGIN
    CREATE TABLE ShopProducts (
        ProductID INT PRIMARY KEY IDENTITY(1,1),
        ProductName VARCHAR(255),
        Price DECIMAL(10, 2)
    );
END;

-- Create Orders table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Orders')
BEGIN
    CREATE TABLE Orders (
        OrderID INT PRIMARY KEY IDENTITY(1,1),
        UserID INT,
        ProductID INT,
        Quantity INT,
        OrderDate DATETIME DEFAULT GETDATE(),
        FOREIGN KEY (UserID) REFERENCES Users(UserID),
        FOREIGN KEY (ProductID) REFERENCES ShopProducts(ProductID)
    );
END;

-- Insert sample data into ShopProducts
INSERT INTO ShopProducts (ProductName, Price) VALUES 
('Caramel Macchiato', 350.00),
('Flat White', 190.00),
('Chocolate Frappucino', 240.00),
('Frappe', 270.00),
('Caffe Mocha', 330.00),
('Vanilla Frappucino', 230.00),
('White Chocolate Mocha', 350.00),
('Ice Latte', 200.00);

-- Create Members table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Members')
BEGIN
    CREATE TABLE Members (
        MemberID INT PRIMARY KEY IDENTITY(1,1),
        MemberName VARCHAR(255),
        MemberEmail VARCHAR(255) UNIQUE,
        MemberType VARCHAR(50)
    );
END;

-- Create Dashboards table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Dashboards')
BEGIN
    CREATE TABLE Dashboards (
        DashboardID INT PRIMARY KEY IDENTITY(1,1),
        DashboardName VARCHAR(255),
        UserID INT,
        FOREIGN KEY (UserID) REFERENCES Users(UserID)
    );
END;

-- Create Clients table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'Clients')
BEGIN
    CREATE TABLE Clients (
        ClientID INT PRIMARY KEY IDENTITY(1,1),
        ClientName VARCHAR(255),
        ClientEmail VARCHAR(255) UNIQUE,
        ClientPhone VARCHAR(20)
    );
END;

-- Create LogInSignUp table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'LogInSignUp')
BEGIN
    CREATE TABLE LogInSignUp (
        LogInSignUpID INT PRIMARY KEY IDENTITY(1,1),
        UserName VARCHAR(255),
        Password VARCHAR(255),
        SignUpDate DATETIME DEFAULT GETDATE()
    );
END;

-- Create ContactUs table
IF NOT EXISTS (SELECT 1 FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME = 'ContactUs')
BEGIN
    CREATE TABLE ContactUs (
        InquiryID INT PRIMARY KEY IDENTITY(1,1),
        FullName VARCHAR(255),
        Email VARCHAR(255),
        Message TEXT,
        InquiryDate DATETIME DEFAULT GETDATE()
    );
END;
