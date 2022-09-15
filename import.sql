DROP DATABASE IF EXISTS `Vince_Refrigerators`;
DROP DATABASE IF EXISTS `vince`;
CREATE DATABASE `vince`;
USE `vince`;

CREATE TABLE `items` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    used BIT,
    date_purchased DATE,
    specs_1 VARCHAR(30),
    specs_2 VARCHAR(30),
    specs_3 VARCHAR(30),
    description VARCHAR(255),
    price DECIMAL(10,2)
);