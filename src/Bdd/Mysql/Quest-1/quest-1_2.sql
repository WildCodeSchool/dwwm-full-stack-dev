ALTER TABLE wizard
ADD is_muggle boolean NOT NULL;
CREATE TABLE school (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL, 
  capacity INT NULL,
  country VARCHAR(250) NOT NULL,
  PRIMARY KEY (`id`)
  );
SHOW TABLES;
DESCRIBE wizard;
DESCRIBE school;


