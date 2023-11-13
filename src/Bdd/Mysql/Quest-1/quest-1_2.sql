USE wild_db_quest;
ALTER TABLE wizard ADD is_muggle BOOL NOT NULL;

CREATE TABLE school(
    `id` INT NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `capacity` INT NULL,
    `country` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`id`)
);

SHOW TABLES;

DESCRIBE wizard;
DESCRIBE school;

