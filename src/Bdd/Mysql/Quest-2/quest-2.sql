SELECT *
FROM wizard
WHERE
    is_muggle = FALSE
    AND birthday BETWEEN '1975-01-01' AND '1985-12-31';

SELECT firstname FROM wizard WHERE firstname LIKE 'H%';

SELECT firstname, lastname
FROM wizard
WHERE
    lastname = "potter"
    OR lastname = "dursley"
ORDER BY firstname ASC;

SELECT
    firstname,
    lastname,
    birthday
FROM wizard
WHERE birthday
ORDER BY birthday ASC
LIMIT 1;