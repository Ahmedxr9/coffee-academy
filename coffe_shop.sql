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
