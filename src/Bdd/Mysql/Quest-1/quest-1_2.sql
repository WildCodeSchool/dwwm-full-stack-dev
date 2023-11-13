USE wild_db_quest;

ALTER TABLE `wizard` ADD `is_muggle` BOOLEAN NOT NULL;

CREATE TABLE
    if NOT exists `wild_db_quest`.`school` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(100) NOT NULL,
        `capacity` INT,
        `country` VARCHAR(255) not NULL,
        PRIMARY KEY (`id`)
    );

SHOW TABLES;

DESCRIBE wizard;

DESCRIBE school;