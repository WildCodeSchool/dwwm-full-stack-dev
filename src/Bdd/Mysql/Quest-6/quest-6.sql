SELECT
    t.name,
    count(*) AS nb_players
FROM wild_db_quest.player p
    INNER JOIN wild_db_quest.team t ON t.id = p.team_id
GROUP BY t.name
ORDER BY nb_players DESC;

SELECT t.name
FROM wild_db_quest.player p
    INNER JOIN wild_db_quest.team t ON t.id = p.team_id
GROUP BY t.name
HAVING COUNT(*) > 14
ORDER BY t.name;

SELECT
    w.*,
    t.name,
    p.enrollment_date
FROM wild_db_quest.player p
    INNER JOIn wild_db_quest.wizard w ON w.id = p.wizard_id
    INNER JOIN wild_db_quest.team t ON p.team_id = t.id
WHERE
    t.id = 1
    AND WEEKDAY(p.enrollment_date) = 0
ORDER BY p.enrollment_date;