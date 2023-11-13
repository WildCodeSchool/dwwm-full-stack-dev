USE wild_db_quest;

ALTER TABLE wizard
ADD is_muggle BOOLEAN NOT NULL;

CREATE TABLE school (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  capacity INT NULL,
  country VARCHAR(225) NOT NULL,
  PRIMARY KEY (`id`)
);

SHOW TABLES;

DESCRIBE wizard;
DESCRIBE school;