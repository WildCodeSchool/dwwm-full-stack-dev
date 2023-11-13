-- Active: 1699870796132@@127.0.0.1@3306@wild_db_quest

SELECT *
FROM wizard
WHERE
    birthday BETWEEN '1975-01-01' AND '1985-12-31';

SELECT * FROM wizard WHERE firstname LIKE 'H%';

SELECT firstname, lastname
FROM wizard
WHERE lastname LIKE "Potter"
ORDER BY firstname ASC;

SELECT
    firstname,
    lastname,
    birthday
FROM wizard
WHERE birthday
ORDER BY birthday DESC
LIMIT 1;