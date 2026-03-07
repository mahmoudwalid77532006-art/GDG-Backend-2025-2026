-- 1
SELECT Student_ID, Name, City
FROM Student;

-- 2
SELECT Instructor.Name, Department.Dept_Name, Instructor.Salary
FROM Instructor
JOIN Department
ON Instructor.Dept_Code = Department.Dept_Code;

-- 3
SELECT Department.Dept_Name, Course.Course_Code, Course.Title
FROM Course
JOIN Department
ON Course.Dept_Code = Department.Dept_Code
ORDER BY Department.Dept_Name;

-- 4
SELECT Student.Name, Enrollment.Enrollment_Date, Enrollment.Final_Grade
FROM Enrollment
JOIN Student ON Enrollment.Student_ID = Student.Student_ID
WHERE Course_Code='CS101';

-- 5
SELECT Course_Code, COUNT(Student_ID) AS Total_Students
FROM Enrollment
GROUP BY Course_Code;

-- 6
SELECT Instructor.Name, Instructor.Salary, Department.Dept_Name
FROM Instructor
JOIN Department ON Instructor.Dept_Code=Department.Dept_Code
WHERE Salary=(SELECT MAX(Salary) FROM Instructor);

-- 7
SELECT c1.Title AS Course, c2.Title AS Prerequisite
FROM Prerequisite
JOIN Course c1 ON Prerequisite.Course_Code=c1.Course_Code
JOIN Course c2 ON Prerequisite.Prereq_Code=c2.Course_Code;

-- 8
SELECT Student.Name, Dependent.Dependent_Name, Dependent.Relationship
FROM Student
JOIN Dependent ON Student.Student_ID=Dependent.Student_ID;

-- 9
SELECT Department.Dept_Name, COUNT(Instructor_ID) AS Num_Instructors
FROM Instructor
JOIN Department ON Instructor.Dept_Code=Department.Dept_Code
GROUP BY Department.Dept_Name
HAVING COUNT(Instructor_ID)>5;

-- 10
SELECT Student_ID, COUNT(Course_Code) AS Num_Courses
FROM Enrollment
GROUP BY Student_ID
HAVING COUNT(Course_Code)>3;

-- 11
SELECT Course.Course_Code, Course.Title
FROM Course
LEFT JOIN Enrollment
ON Course.Course_Code=Enrollment.Course_Code
WHERE Enrollment.Student_ID IS NULL;