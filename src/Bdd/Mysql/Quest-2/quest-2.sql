USE wild_db_quest;

SELECT *
FROM wizard
WHERE
    birthday BETWEEN '1975-01-01' AND '1985-01-01';

SELECT firstname FROM wizard WHERE firstname LIKE 'h%';

SELECT firstname
FROM wizard
WHERE lastname = 'potter'
ORDER BY firstname;

SELECT
    firstname,
    lastname,
    birthday
FROM wizard
ORDER BY birthday ASC
LIMIT 1;