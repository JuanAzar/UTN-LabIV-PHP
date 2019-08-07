CREATE DATABASE University;

USE University;

CREATE TABLE students
(
	recordId INT NOT NULL PRIMARY KEY,
    firstName NVARCHAR(100) NOT NULL,
    lastName NVARCHAR(100) NOT NULL
)Engine=InnoDB;