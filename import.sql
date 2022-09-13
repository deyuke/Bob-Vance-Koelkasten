DROP DATABASE IF EXISTS `Vince_Refrigerators`;
CREATE DATABASE `Vince_Refrigerators`;
USE `Vince_Refrigerators`;

CREATE TABLE `used` (
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    date_purchased DATE NOT NULL,
    specs_list VARCHAR(100),
    description VARCHAR(255)
);
