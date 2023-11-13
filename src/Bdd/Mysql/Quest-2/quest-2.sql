USE wild_db_quest;

SELECT * FROM wizard WHERE birthday BETWEEN '1975-01-01' AND '1985-12-31';

SELECT firstname FROM wizard WHERE firstname LIKE 'H$';