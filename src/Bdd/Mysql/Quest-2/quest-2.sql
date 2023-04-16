SELECT *
FROM wild_db_quest.wizard
WHERE
    is_muggle = FALSE
    AND birthday BETWEEN '1975-01-01' AND '1985-01-01';

SELECT firstname from wild_db_quest.wizard WHERE firstname LIKE 'H%';

SELECT firstname, lastname
from wild_db_quest.wizard
WHERE lastname = 'Potter'
ORDER BY firstname;

SELECT
    firstname,
    lastname,
    birthday
FROM wild_db_quest.wizard
ORDER BY birthday
LIMIT 1;