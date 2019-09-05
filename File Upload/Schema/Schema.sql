CREATE DATABASE file_upload_example;

USE file_upload_example;

CREATE TABLE images
(
	imageId INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(100) NOT NULL
)Engine=InnoDB;

DELIMITER $$

CREATE PROCEDURE images_add(IN Name VARCHAR(100))
BEGIN
    INSERT INTO images
    	(name)
	VALUES
		(name);

END$$