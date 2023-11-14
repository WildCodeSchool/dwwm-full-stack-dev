USE wild_db_quest;

SELECT * FROM wizard WHERE birthday BETWEEN '1975-01-01' AND '1985-12-31' OR is_muggle = FALSE;
 
SELECT firstname FROM wizard WHERE firstname LIKE 'H%';

SELECT firstname, lastname FROM wizard WHERE lastname = 'Potter' OR is_muggle IS TRUE ORDER BY firstname;

SELECT firstname, lastname, birthday FROM wizard ORDER BY birthday ASC LIMIT 1;

