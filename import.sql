DROP DATABASE IF EXISTS `Vince_Refrigerators`;
CREATE DATABASE `Vince_Refrigerators`;
USE `Vince_Refrigerators`;

CREATE TABLE `items` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    image_path VARCHAR(255) NOT NULL,
    image_name VARCHAR(100) NOT NULL,
    used BIT,
    date_purchased DATE,
    specs_list VARCHAR(100),
    description VARCHAR(255),
    price DECIMAL(10,2)
);