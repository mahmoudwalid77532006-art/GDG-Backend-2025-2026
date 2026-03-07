CREATE TABLE Department (
    Dept_Code VARCHAR(10) PRIMARY KEY,
    Dept_Name VARCHAR(100) NOT NULL,
    Building_Location VARCHAR(100) NOT NULL
);

CREATE TABLE Instructor (
    Instructor_ID INT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    Salary DECIMAL(10,2) CHECK (Salary > 0),
    Hire_Date DATE NOT NULL,
    Dept_Code VARCHAR(10) NOT NULL,
    City VARCHAR(100),
    Street VARCHAR(100),
    Zip_Code VARCHAR(10),
    FOREIGN KEY (Dept_Code) REFERENCES Department(Dept_Code)
);

ALTER TABLE Department
ADD Head_ID INT UNIQUE,
ADD FOREIGN KEY (Head_ID) REFERENCES Instructor(Instructor_ID);

CREATE TABLE Instructor_Phone (
    Instructor_ID INT,
    Phone_Number VARCHAR(15),
    PRIMARY KEY (Instructor_ID, Phone_Number),
    FOREIGN KEY (Instructor_ID) REFERENCES Instructor(Instructor_ID)
);

CREATE TABLE Student (
    Student_ID INT PRIMARY KEY,
    Name VARCHAR(100) NOT NULL,
    City VARCHAR(100),
    Street VARCHAR(100),
    Zip_Code VARCHAR(10)
);

CREATE TABLE Student_Phone (
    Student_ID INT,
    Phone_Number VARCHAR(15),
    PRIMARY KEY (Student_ID, Phone_Number),
    FOREIGN KEY (Student_ID) REFERENCES Student(Student_ID)
);

CREATE TABLE Course (
    Course_Code VARCHAR(10) PRIMARY KEY,
    Title VARCHAR(100) NOT NULL,
    Credits INT CHECK (Credits BETWEEN 1 AND 5),
    Dept_Code VARCHAR(10),
    FOREIGN KEY (Dept_Code) REFERENCES Department(Dept_Code)
);

CREATE TABLE Prerequisite (
    Course_Code VARCHAR(10),
    Prereq_Code VARCHAR(10),
    PRIMARY KEY (Course_Code, Prereq_Code),
    FOREIGN KEY (Course_Code) REFERENCES Course(Course_Code),
    FOREIGN KEY (Prereq_Code) REFERENCES Course(Course_Code)
);

CREATE TABLE Dependent (
    Dependent_Name VARCHAR(100),
    Birthdate DATE,
    Relationship VARCHAR(50),
    Student_ID INT,
    PRIMARY KEY (Dependent_Name, Student_ID),
    FOREIGN KEY (Student_ID) REFERENCES Student(Student_ID) ON DELETE CASCADE
);

CREATE TABLE Enrollment (
    Student_ID INT,
    Course_Code VARCHAR(10),
    Enrollment_Date DATE,
    Final_Grade VARCHAR(2),
    PRIMARY KEY (Student_ID, Course_Code),
    FOREIGN KEY (Student_ID) REFERENCES Student(Student_ID),
    FOREIGN KEY (Course_Code) REFERENCES Course(Course_Code)
);