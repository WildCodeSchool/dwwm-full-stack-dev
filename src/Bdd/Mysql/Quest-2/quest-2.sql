USE wild_db_quest;

SELECT * FROM wizard WHERE 

SELECT firstname FROM wizard WHERE firstname LIKE 'h%';

SELECT firstname, lastname
FROM wizard
WHERE
    lastname = 'potter'
    OR is_muggle = TRUE
ORDER BY firstname;

SELECT
    firstname,
    lastname,
    birthday
FROM wizard
ORDER BY birthday ASC
LIMIT 1;