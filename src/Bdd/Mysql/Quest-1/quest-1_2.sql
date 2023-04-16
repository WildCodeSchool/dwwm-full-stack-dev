USE wild_db_quest;

ALTER TABLE wizard ADD COLUMN is_muggle BOOLEAN NOT NULL;

CREATE TABLE
    school (
        id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(100) NOT NULL,
        capacity INT NULL,
        country VARCHAR(255) NOT NULL
    );

SHOW TABLES;

DESCRIBE wizard;

DESCRIBE school;