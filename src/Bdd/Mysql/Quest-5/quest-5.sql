SELECT
    w.lastname,
    w.firstname,
    p.role,
    t.name
FROM wild_db_quest.wizard w
    JOIN wild_db_quest.player p ON p.wizard_id = w.id
    JOIN wild_db_quest.team t ON t.id = p.team_id
ORDER BY
    t.name ASC,
    p.role ASC,
    w.lastname ASC,
    w.firstname ASC;

SELECT
    w.firstname,
    w.firstname,
    p.role
FROM wild_db_quest.wizard w
    JOIN wild_db_quest.player p ON p.wizard_id = w.id
WHERE p.role = 'seeker'
ORDER BY
    w.lastname ASC,
    w.firstname ASC;

SELECT
    w.firstname,
    w.lastname,
    p.role
FROM wild_db_quest.wizard w
    LEFT OUTER JOIN wild_db_quest.player p ON w.id = p.wizard_id
WHERE p.role IS NULL;