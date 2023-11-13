ALTER TABLE `wizard`
ADD `is_muggle` BOOLEAN NOT NULL;

CREATE TABLE
    `wild_db_quest`.`school` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(100) NOT NULL,
        `capacity` INT NULL,
        `country` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`id`)
    );
